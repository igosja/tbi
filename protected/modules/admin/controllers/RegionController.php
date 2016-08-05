<?php

class RegionController extends AController
{
    public $h1 = 'Области';
    public $title = 'Области';
    public $model_name = 'Region';

    public function actionIndex()
    {
        $model = $this->getModel('search');
        $model->unsetAttributes();
        if (isset($_GET[$this->model_name])) {
            $model->attributes = $_GET[$this->model_name];
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
            'Список',
        );
        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id = 0)
    {
        $id = (int)$id;
        if (0 == $id) {
            $this->h1 = 'Создание области';
            $model = $this->getModel();
        } else {
            $this->h1 = 'Редактирование области';
            $model = $this->getModel()->findByPk($id);
            if (null === $model) {
                throw new CHttpException(404, 'Страница не найдена.');
            }
        }
        if ($data = Yii::app()->request->getPost($this->model_name)) {
            $model->attributes = $data;
            if ($model->save()) {
                $model = $this->getModel()->findByPk($model->id);
                if (empty($model->url)) {
                    $model->save();
                }
                $this->redirect(array('view', 'id' => $model->id));
            }
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
        );
        if (0 != $id) {
            $this->breadcrumbs[$model->name] = array('view', 'id' => $model->id);
        }
        $this->breadcrumbs[] = $this->h1;
        $this->render('form', array('model' => $model));
    }

    public function actionView($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->h1 = $model->name;
        $this->breadcrumbs = array(
            $this->title => array('index'),
            $this->h1,
        );
        $this->render('view', array('model' => $model));
    }

    public function actionDelete($id)
    {
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $model->delete();
        $this->redirect(array('index'));
    }

    public function actionStatus($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->getModel()->updateByPk($id, array('status' => 1 - $model->status));
    }

    public function getModel($search = '')
    {
        $model = new $this->model_name($search);
        return $model;
    }
}

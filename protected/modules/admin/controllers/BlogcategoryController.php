<?php

class BlogcategoryController extends AController
{
    public $h1 = 'Категории блога';
    public $title = 'Категории блога';
    public $model_name = 'BlogCategory';

    public function actionIndex()
    {
        $model = $this->getModel('search');
        $model->dbCriteria->order = '`order` ASC';
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
            $this->h1 = 'Создание категории';
            $model = $this->getModel();
        } else {
            $this->h1 = 'Редактирование категории';
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
                    $model->url = strtolower($model->id . '-' . str_replace($this->rus, $this->lat, $model->name));
                    $model->save();
                }
                $this->uploadImage($model->id);
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

    public function actionOrder($id)
    {
        $id = (int)$id;
        $order_old = $_GET['order_old'];
        $order_new = $_GET['order_new'];
        $this->getModel()->updateByPk($id, array('order' => $order_new));
        if ($order_old < $order_new) {
            $a_model = $this->getModel()->findAll(array('condition' => '`order`>=' . $order_old . ' AND `order`<=' . $order_new . ' AND id!=' . $id));
            foreach ($a_model as $model) {
                $model->order--;
                $model->save();
            }
        } else {
            $a_model = $this->getModel()->findAll(array('condition' => '`order`<=' . $order_old . ' AND `order`>=' . $order_new . ' AND id!=' . $id));
            foreach ($a_model as $model) {
                $model->order++;
                $model->save();
            }
        }
    }

    public function uploadImage($id)
    {
        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
            $image = $_FILES['image'];
            $ext = $image['name'];
            $ext = explode('.', $ext);
            $ext = end($ext);
            if (in_array($ext, array('jpg', 'jpeg', 'gif', 'png'))) {
                $file = $image['tmp_name'];
                $image_url = ImageIgosja::put_file($file, $ext);
                $o_image = new Image();
                $o_image->url = $image_url;
                $o_image->save();
                $image_id = $o_image->id;
                $model = $this->getModel()->findByPk($id);
                $model->image_id = $image_id;
                $model->save();
            }
        }
    }

    public function getModel($search = '')
    {
        $model = new $this->model_name($search);
        return $model;
    }
}

<?php

class BrandController extends AController
{
    public $h1 = 'Бренды';
    public $post_name = 'Brand';

    public function actionIndex()
    {
        $this->breadcrumbs = array(
            'Бренды' => array('index'),
            'Список',
        );
        $model = $this->getModel('search');
        $model->unsetAttributes();
        if (isset($_GET['Brand']))
            $model->attributes = $_GET['Brand'];

        $this->render('index', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id = 0)
    {
        $this->h1 = 'Редактирование бренда';
        $id = (int)$id;
        if (0 == $id) {
            $model = $this->getModel();
        } else {
            $model = $this->getModel()->findByPk($id);
            if (null === $model) {
                throw new CHttpException(404, 'Страница не найдена.');
            }
        }
        if ($data = Yii::app()->request->getPost($this->post_name)) {
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
        $this->render('form', array('model' => $model));
    }

    public function actionView($id)
    {
        $id = (int) $id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->h1 = $model->name;
        $this->render('view', array('model' => $model));
    }

    public function actionDelete($id)
    {
        $model = $this->getModel()->findByPk($id);
        $model->delete();
        $this->redirect(array('index'));
    }

    public function actionStatus($id)
    {
        $id = (int) $id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->getModel()->updateByPk($id, array('status' => 1 - $model->status));
        $this->redirect(array('index'));
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
        $model = new Brand($search);
        return $model;
    }
}

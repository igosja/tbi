<?php

class DeliverypageController extends AController
{
    public $h1 = 'Доставка';
    public $model_name = 'DeliveryPage';

    public function actionIndex()
    {
        $model = $this->getModel()->findByPk(1);
        $this->breadcrumbs = array(
            $this->h1,
        );
        $this->render('index', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if ($data = Yii::app()->request->getPost($this->model_name)) {
            $model->attributes = $data;
            if ($model->save()) {
                $this->uploadImage($model->id);
                $this->redirect(array('index'));
            }
        }
        $this->breadcrumbs = array(
            $this->h1 => array('index'),
            'Редактирование',
        );
        $this->render('form', array('model' => $model));
    }

    public function actionImage($id)
    {
        $o_image = Image::model()->findByPk($id);
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $o_image->url)) {
            unlink($_SERVER['DOCUMENT_ROOT'] . $o_image->url);
        }
        $o_image->delete();
        $this->redirect($_SERVER['HTTP_REFERER']);
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
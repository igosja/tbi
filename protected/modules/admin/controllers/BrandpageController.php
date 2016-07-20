<?php

class BrandpageController extends AController
{
    public $h1 = 'SEO-теги брендов';
    public $post_name = 'BrandPage';

    public function actionIndex()
    {
        $model = $this->getModel()->findByPk(1);
        $this->render('index', array('model' => $model));
    }

    public function actionUpdate($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if ($data = Yii::app()->request->getPost($this->post_name)) {
            $model->attributes = $data;
            if ($model->save()) {
                $this->redirect(array('index'));
            }
        }
        $this->render('form', array('model' => $model));
    }

    public function getModel($search = '')
    {
        $model = new BrandPage($search);
        return $model;
    }
}
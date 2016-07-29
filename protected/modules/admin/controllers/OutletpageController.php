<?php

class OutletpageController extends AController
{
    public $h1 = 'Outlet';
    public $model_name = 'OutletPage';

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
                $this->redirect(array('index'));
            }
        }
        $this->breadcrumbs = array(
            $this->h1 => array('index'),
            'Редактирование',
        );
        $this->render('form', array('model' => $model));
    }

    public function getModel($search = '')
    {
        $model = new $this->model_name($search);
        return $model;
    }
}
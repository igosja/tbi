<?php

class PopularController extends AController
{
    public $h1 = 'Популярные товары';
    public $title = 'Популярные товары';
    public $model_name = 'ProductPopular';

    public function actionIndex()
    {
        $model = $this->getModel('search');
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

    public function actionUpdate()
    {
        $this->h1 = 'Редактирование товаров';
        $model = $this->getModel();
        if ($data = Yii::app()->request->getPost('product')) {
            Yii::app()->db->createCommand()->truncateTable('productpopular');
            foreach ($data as $item) {
                $model = $this->getModel();
                $model->product_id = $item;
                $model->save();
            }
            $this->redirect(array('index'));
        }
        $a_product = array();
        foreach ($this->getModel()->findAll() as $item) {
            $a_product[] = $item->product_id;
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
        );
        $this->breadcrumbs[] = $this->h1;
        $this->render('form', array(
            'model' => $model,
            'a_product' => $a_product,
        ));
    }

    public function getModel($search = '')
    {
        $model = new $this->model_name($search);
        return $model;
    }
}
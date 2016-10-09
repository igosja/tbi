<?php

class OrderController extends AController
{
    public $h1 = 'Заказы';
    public $title = 'Заказы';
    public $model_name = 'Order';

    public function actionIndex($id = 0)
    {
        $model = $this->getModel('search');
        $a_status = Status::model()->findAll();
        if (0 != $id) {
            $status_id = $id;
        } else {
            $status_id = $a_status[0]->id;
        }
        $model->attributes = array('status_id' => $status_id);
        $this->breadcrumbs = array(
            $this->title => array('index'),
            'Список',
        );
        $this->render('index', array(
            'model' => $model,
            'a_status' => $a_status,
            'status_id' => $status_id,
        ));
    }

    public function actionUpdate($id)
    {
        $id = (int)$id;
        $this->h1 = 'Редактирование заказа';
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        if ($data = Yii::app()->request->getPost($this->model_name)) {
            $model->attributes = $data;
            if ($model->save()) {
                $o_status = Status::model()->findByPk($model->status_id);
                $o_orderstatus = new OrderStatus();
                $o_orderstatus->order_id = $id;
                $o_orderstatus->status = $o_status->name;
                $o_orderstatus->save();
                $this->redirect(array('view', 'id' => $model->id));
            }
        }
        $this->breadcrumbs = array(
            $this->title => array('index'),
            $model->id => array('view', 'id' => $model->id),
            $this->h1,
        );
        $this->render('form', array('model' => $model));
    }

    public function actionView($id)
    {
        $id = (int)$id;
        $model = $this->getModel()->findByPk($id);
        if (null === $model) {
            throw new CHttpException(404, 'Страница не найдена.');
        }
        $this->h1 = $model->id;
        $this->breadcrumbs = array(
            $this->title => array('index'),
            $this->h1,
        );
        $a_status = OrderStatus::model()->findAllByAttributes(array('order_id' => $id));
        $this->render('view', array('model' => $model, 'a_status' => $a_status));
    }

    public function getModel($search = '')
    {
        $model = new $this->model_name($search);
        return $model;
    }
}

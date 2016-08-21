<?php

class CheckoutController extends Controller
{
    public function actionIndex()
    {
        $model = new Checkout();
        if ($data = Yii::app()->request->getPost('Checkout')) {
            print '<pre>';
            print_r($data);
            exit;
        }
        $o_checkoutpage = CheckoutPage::model()->findByPk(1);
        $this->setSEO($o_checkoutpage);
        $title = CHtml::decode('Оформить заказ');
        $this->breadcrumbs = array(
            $title
        );
        $a_payment = Payment::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $a_shipping = Shipping::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $a_pickup = Pickup::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $o_newpost = Newpost::model()->findByPk(1);
        $this->render('index', array(
            'title' => $title,
            'model' => $model,
            'a_payment' => $a_payment,
            'a_shipping' => $a_shipping,
            'a_pickup' => $a_pickup,
            'o_newpost' => $o_newpost,
        ));
    }
}
<?php

class CheckoutController extends Controller
{
    public function actionIndex()
    {
        $model = new Checkout();
        $o_checkoutpage = CheckoutPage::model()->findByPk(1);
        $this->setSEO($o_checkoutpage);
        $title = CHtml::decode('Оформить заказ');
        $this->breadcrumbs = array(
            $title
        );
        $a_payment = Payment::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $a_pickup = Pickup::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $this->render('index', array(
            'title' => $title,
            'model' => $model,
            'a_payment' => $a_payment,
            'a_pickup' => $a_pickup,
        ));
    }
}
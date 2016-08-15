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
        $this->render('index', array(
            'title' => $title,
            'model' => $model
        ));
    }
}
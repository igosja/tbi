<?php

class DeliveryController extends Controller
{
    public function actionIndex()
    {
        $o_deliverypage = DeliveryPage::model()->findByPk(1);
        $this->setSEO($o_deliverypage);
        $a_delivery = Delivery::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $title = 'Доставка';
        $this->breadcrumbs = array(
            $title,
        );
        $this->render('index', array(
            'title' => $title,
            'o_deliverypage' => $o_deliverypage,
            'a_delivery' => $a_delivery,
        ));
    }
}
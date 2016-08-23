<?php

class IndexController extends AController
{
    public function actionIndex()
    {
        $cart = 0;
        $o_status = Status::model()->find('', array('order' => '`order`'));
        if (null !== $o_status) {
            $cart = Order::model()->countByAttributes(array('status_id' => $o_status->id));
        }
        $call = Call::model()->countByAttributes(array('status' => 0), array('condition' => 'text IS NULL'));
        $message = Call::model()->countByAttributes(array('status' => 0), array('condition' => 'text IS NOT NULL'));
        $this->render('index', array('cart' => $cart, 'call' => $call, 'message' => $message));
    }
}
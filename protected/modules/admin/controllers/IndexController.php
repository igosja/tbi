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
        $call = Call::model()->countByAttributes(array('status' => 0));
        $message = Message::model()->countByAttributes(array('status' => 0));
        $vacancy = Vacancy::model()->countByAttributes(array('status' => 0));
        $this->render('index', array(
            'cart' => $cart,
            'call' => $call,
            'message' => $message,
            'vacancy' => $vacancy,
        ));
    }
}
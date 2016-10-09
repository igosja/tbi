<?php

class IndexController extends AController
{
    public function actionIndex()
    {
        $a_order = Order::model()->findAll(array(
            'select' => array(
                'SUM(price) AS `price`',
                "DATE_FORMAT(FROM_UNIXTIME(`date`), '%d') AS `day`",
                "DATE_FORMAT(FROM_UNIXTIME(`date`), '%m') AS `month`"
            ),
            'group' => "DATE_FORMAT(FROM_UNIXTIME(`date`), '%d')",
            'order' => '`date` DESC',
            'condition' => '`date`>UNIX_TIMESTAMP()-30*24*60*60',
        ));
        $order_date = array();
        $order_summ = array();
        foreach ($a_order as $item) {
            $date = "'" . $item->day . '.' . $item->month . "'";
            $summ = $item->price;

            $order_date[] = $date;
            $order_summ[] = $summ;
        }
        $order_date = implode(', ', $order_date);
        $order_summ = implode(', ', $order_summ);
        $this->render('index', array('order_date' => $order_date, 'order_summ' => $order_summ));
    }
}
<?php

class PaymentController extends Controller
{
    public function actionIndex()
    {
        $o_paymentpage = PaymentPage::model()->findByPk(1);
        $this->setSEO($o_paymentpage);
        $title = 'Оплата';
        $this->breadcrumbs = array(
            $title,
        );
        $this->render('index', array(
            'o_paymentpage' => $o_paymentpage,
            'title' => $title,
        ));
    }
}
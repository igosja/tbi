<?php

class FaqController extends Controller
{
    public function actionIndex()
    {
        $o_faqpage = FaqPage::model()->findByPk(1);
        $this->setSEO($o_faqpage);
        $a_faq = Faq::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $title = 'ЧаВо';
        $this->breadcrumbs = array(
            $title,
        );
        $this->render('index', array(
            'title' => $title,
            'a_faq' => $a_faq,
        ));
    }
}
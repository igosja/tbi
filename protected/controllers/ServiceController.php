<?php

class ServiceController extends Controller
{
    public function actionIndex()
    {
        $o_servicepage = ServicePage::model()->findByPk(1);
        $this->setSEO($o_servicepage);
        $title = 'Услуги';
        $this->breadcrumbs = array(
            $title,
        );
        $this->render('index', array(
            'o_servicepage' => $o_servicepage,
            'title' => $title,
        ));
    }
}
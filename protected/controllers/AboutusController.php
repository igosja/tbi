<?php

class AboutusController extends Controller
{
    public function actionIndex()
    {
        $o_aboutpage = AboutPage::model()->findByPk(1);
        $this->setSEO($o_aboutpage);
        $this->breadcrumbs = array(
            $o_aboutpage->name,
        );
        $this->render('index', array(
            'o_aboutpage' => $o_aboutpage,
        ));
    }
}
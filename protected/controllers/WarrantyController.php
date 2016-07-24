<?php

class WarrantyController extends Controller
{
    public function actionIndex()
    {
        $o_warrantypage = WarrantyPage::model()->findByPk(1);
        $this->setSEO($o_warrantypage);
        $title = 'Гарантии';
        $this->breadcrumbs = array(
            $title,
        );
        $this->render('index', array(
            'title' => $title,
            'o_warrantypage' => $o_warrantypage,
        ));
    }
}
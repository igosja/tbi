<?php

class CatalogController extends Controller
{
    public function actionIndex()
    {
        $o_catalogpage = CatalogPage::model()->findByPk(1);
        $this->setSEO($o_catalogpage);
        $title = 'Каталоги';
        $this->breadcrumbs = array(
            $title,
        );
        $this->render('index', array(
            'title' => $title,
            'o_catalogpage' => $o_catalogpage,
        ));
    }
}
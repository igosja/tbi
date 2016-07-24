<?php

class OutletController extends Controller
{
    public function actionIndex()
    {
        $o_outletpage = OutletPage::model()->findByPk(1);
        $this->setSEO($o_outletpage);
        $title = 'Outlet';
        $this->breadcrumbs = array(
            $title,
        );
        $this->render('index', array(
            'title' => $title,
            'o_outletpage' => $o_outletpage,
        ));
    }
}
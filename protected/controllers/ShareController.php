<?php

class ShareController extends Controller
{
    public function actionIndex()
    {
        $o_sharepage = SharePage::model()->findByPk(1);
        $this->setSEO($o_sharepage);
        $title = 'Акции';
        $this->breadcrumbs = array(
            $title,
        );
        $this->render('index', array(
            'title' => $title,
            'o_sharepage' => $o_sharepage,
        ));
    }
}
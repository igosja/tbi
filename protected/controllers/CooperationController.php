<?php

class CooperationController extends Controller
{
    public function actionIndex()
    {
        $o_cooperationpage = CooperationPage::model()->findByPk(1);
        $this->setSEO($o_cooperationpage);
        $title = 'Сотрудничество';
        $this->breadcrumbs = array(
            $title,
        );
        $this->render('index', array(
            'title' => $title,
            'o_cooperationpage' => $o_cooperationpage,
        ));
    }
}
<?php

class ConditionController extends Controller
{
    public function actionIndex()
    {
        $o_conditionpage = ConditionPage::model()->findByPk(1);
        $this->setSEO($o_conditionpage);
        $title = 'Условия использования сайта';
        $this->breadcrumbs = array(
            $title,
        );
        $this->render('index', array(
            'title' => $title,
            'o_conditionpage' => $o_conditionpage,
        ));
    }
}
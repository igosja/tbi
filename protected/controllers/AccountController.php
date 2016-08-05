<?php

class AccountController extends Controller
{
    public function actionIndex()
    {
        $o_accountpage = AccountPage::model()->findByPk(1);
        $this->setSEO($o_accountpage);
        $title = CHtml::decode('Мой профиль');
        $o_user = User::model()->findByPk(Yii::app()->user->id);
        $this->breadcrumbs = array(
            $title
        );
        $this->render('index', array(
            'title' => $title,
            'o_user' => $o_user,
        ));
    }
}
<?php

class SiteController extends Controller
{
    public function actionLogin()
    {
        $model = new User;
        if ($data = Yii::app()->request->getPost('User')) {
            $username = $data['username'];
            $password = $data['password'];
            $identity = new UserIdentity($username, $password);
            if ($identity->authenticate()) {
                Yii::app()->user->login($identity);
                if (Yii::app()->request->isAjaxRequest) {
                    print
                    CHtml::link(
                        'Личный кабинет',
                        array('account/index'),
                        array('title' => 'Личный кабинет')
                    ) . ' ' . CHtml::link(
                        'Выход',
                        array('site/logout'),
                        array('title' => 'Выход')
                    );
                    Yii::app()->end();
                } else {
                    $this->redirect(array('admin/index'));
                }
            } else {
                if (Yii::app()->request->isAjaxRequest) {
                    $model->error_login = 'Неправильная комбинация<br/>логин/пароль';
                } else {

                }
            }
        }
        $this->layout = 'login';
        $this->render('login', array('model' => $model));
    }

    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(array('index/index'));
    }
}
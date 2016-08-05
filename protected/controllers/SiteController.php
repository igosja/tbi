<?php

class SiteController extends Controller
{
    public function actionSignup()
    {
        $model = new User(User::SCENARIO_SIGNUP);
        if (Yii::app()->request->isAjaxRequest && $data = Yii::app()->request->getPost('User')) {
            $model->attributes = $data;
            if ($model->save()) {
                $username = $model->username;
                $password = $data['password'];
                $identity = new UserIdentity($username, $password);
                $identity->authenticate();
                Yii::app()->user->login($identity);
                print json_encode(array('success' => 1));
                exit;
            } else {
                print json_encode(
                    array(
                        'success' => 0,
                        'error' => array(
                            'email' => $model->getError('email'),
                            'name' => $model->getError('name'),
                            'password' => $model->getError('password'),
                            'password_repeat' => $model->getError('password_repeat'),
                            'surname' => $model->getError('surname'),
                        ),
                    )
                );
                exit;
            }
        }
    }

    public function actionLogin()
    {
        $model = new User(User::SCENARIO_LOGIN);
        if ($data = Yii::app()->request->getPost('User')) {
            $username = $data['username'];
            $password = $data['password'];
            $identity = new UserIdentity($username, $password);
            if ($identity->authenticate()) {
                Yii::app()->user->login($identity);
                if (Yii::app()->request->isAjaxRequest) {
                    print json_encode(array('success' => 1));
                    exit;
                } else {
                    $this->redirect(array('admin/index'));
                }
            } else {
                if (Yii::app()->request->isAjaxRequest) {
                    print json_encode(array('success' => 0));
                    exit;
                } else {
                    $model->error_login = 'Неправильная комбинация<br/>логин/пароль';
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
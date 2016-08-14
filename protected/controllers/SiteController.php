<?php

class SiteController extends Controller
{
    public function actionSignup()
    {
        $model = new User();
        if (Yii::app()->request->isAjaxRequest && $data = Yii::app()->request->getPost('User')) {
            $model->setScenario(User::SCENARIO_SIGNUP);
            $model->attributes = $data;
            if ($model->save()) {
                $username = $model->username;
                $password = $data['password'];
                $identity = new UserIdentity($username, $password);
                $identity->authenticate();
                Cart::model()->moveToUser($identity->getId());
                Yii::app()->user->login($identity);
                Yii::app()->user->setFlash('register_success', 'true');
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
        $model = new User();
        if ($data = Yii::app()->request->getPost('User')) {
            $username = $data['username'];
            $password = $data['password'];
            $identity = new UserIdentity($username, $password);
            if ($identity->authenticate()) {
                Cart::model()->moveToUser($identity->getId());
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

    public function actionSubscribe()
    {
        if ($data = Yii::app()->request->getPost('Subscribe')) {
            $model = Subscribe::model()->findByAttributes(array('email' => $data['email']));
            if (null !== $model) {
                $model->status = 1;
                $model->save();
                print json_encode(array('success' => 1));
                exit;
            } else {
                $model = new Subscribe();
                $model->attributes = $data;
                if ($model->save()) {
                    print json_encode(array('success' => 1));
                    exit;
                } else {
                    print json_encode(array('success' => 0));
                    exit;
                }
            }
        }
    }

    public function actionCall()
    {
        if ($data = Yii::app()->request->getPost('Call')) {
            $model = new Call();
            $model->attributes = $data;
            if ($model->save()) {
                print json_encode(array('success' => 1));
                exit;
            } else {
                print json_encode(array('success' => 0));
                exit;
            }
        }
    }

    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(array('index/index'));
    }
}
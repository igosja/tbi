<?php

class ContactsController extends Controller
{
    public function actionIndex()
    {
        $this->setSEO($this->contacts);
        $title = 'Контакты';
        $this->breadcrumbs = array(
            $title,
        );
        $model = new Message();
        if ($data = Yii::app()->request->getPost('Message')) {
            $model->attributes = $data;
            if ($model->save()) {
                Yii::app()->user->setFlash('contacts_success', 'true');
                $this->refresh();
            }
        }
        $this->render('index', array(
            'title' => $title,
            'model' => $model,
        ));
    }
}
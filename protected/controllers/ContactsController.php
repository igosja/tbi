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
        $this->render('index', array(
            'title' => $title,
        ));
    }
}
<?php

class Controller extends CController
{
    public $seo_title;
    public $seo_description;
    public $seo_keywords;
    public $layout = 'main';
    public $menu = array();
    public $breadcrumbs = array();
    public $a_social;
    public $contacts;
    public $defaultAction = 'index';

    public function init()
    {
        $this->a_social = Social::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $this->contacts = Contacts::model()->findByPk(1);
    }

    public function setSEO($model)
    {
        $this->seo_title = $model->seo_title;
        $this->seo_description = $model->seo_description;
        $this->seo_keywords = $model->seo_keywords;
    }
}
<?php

class Controller extends CController
{
    public $layout = 'main';
    public $a_social;
    public $breadcrumbs = array();
    public $seo_description;
    public $seo_keywords;
    public $seo_title;

    public function init()
    {
        $this->a_social = Social::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
    }

    public function setSEO($model)
    {
        $this->seo_title = CHtml::decode($model->seo_title);
        $this->seo_description = CHtml::decode($model->seo_description);
        $this->seo_keywords = CHtml::decode($model->seo_keywords);
    }
}
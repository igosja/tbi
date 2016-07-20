<?php

class Controller extends CController
{
    public $seo_title;
    public $seo_description;
    public $seo_keywords;
    public $layout = 'main';
    public $menu = array();
    public $breadcrumbs = array();

    public function init()
    {

    }

    public function setSEO($model)
    {
        $this->seo_title = $model->seo_title;
        $this->seo_description = $model->seo_description;
        $this->seo_keywords = $model->seo_keywords;
    }
}
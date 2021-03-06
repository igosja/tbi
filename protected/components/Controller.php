<?php

class Controller extends CController
{
    public $layout = 'main';
    public $a_category;
    public $a_currency;
    public $a_popular;
    public $a_social;
    public $breadcrumbs = array();
    public $contacts;
    public $count_cart;
    public $currency;
    public $menu = array();
    public $model_call;
    public $model_login;
    public $model_subscribe;
    public $office_address;
    public $office_phone;
    public $salon_address;
    public $salon_phone;
    public $seo_description;
    public $seo_keywords;
    public $seo_title;

    public function init()
    {
        if(!isset(Yii::app()->session['product-view'])) {
            Yii::app()->session['product-view'] = 'grid';
        }
        if(!isset(Yii::app()->session['currency'])) {
            Yii::app()->session['currency'] = 1;
        }
        $this->a_currency = Currency::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $this->a_category = Category::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $this->a_popular = ProductPopular::model()->findAll(
            array('limit' => 5, 'order' => 'RAND()')
        );
        $this->a_social = Social::model()->findAllByAttributes(array('status' => 1), array('order' => '`order`'));
        $this->contacts = Contacts::model()->findByPk(1);
        $this->count_cart = Cart::model()->countItems();
        $this->currency = Yii::app()->session['currency'];
        $this->menu = Category::model()->findAllByAttributes(
            array('status' => 1),
            array('limit' => 5, 'order' => '`order`')
        );
        $this->model_call = new Call();
        $this->model_login = new User();
        $this->model_subscribe = new Subscribe();
        $this->office_address = $this->contacts->office_address;
        $this->office_address = explode(';', $this->office_address);
        $this->office_address = end($this->office_address);
        $this->office_phone = $this->contacts->office_phone;
        $this->office_phone = explode(';', $this->office_phone);
        $this->office_phone = $this->office_phone[0];
        $this->salon_address = $this->contacts->salon_address;
        $this->salon_address = explode(';', $this->salon_address);
        $this->salon_address = end($this->salon_address);
        $this->salon_phone = $this->contacts->salon_phone;
        $this->salon_phone = explode(';', $this->salon_phone);
        $this->salon_phone = $this->salon_phone[0];

        $clientScript = Yii::app()->getClientScript();
        $clientScript->scriptMap = array(
           'jquery.js' => false,
        );
    }

    public function setSEO($model)
    {
        $this->seo_title = CHtml::decode($model->seo_title);
        $this->seo_description = CHtml::decode($model->seo_description);
        $this->seo_keywords = CHtml::decode($model->seo_keywords);
    }
}
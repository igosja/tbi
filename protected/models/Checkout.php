<?php

class Checkout extends CFormModel
{
    public $email;
    public $kyiv_address;
    public $kyiv_message;
    public $name;
    public $payment_id;
    public $phone;
    public $post_address;
    public $post_city;
    public $post_warehouse;
    public $subscribe = 1;
    public $surname;

    public function rules()
    {
        return array(
            array('email, name, phone, surname', 'required'),
            array('payment_id', 'numerical', 'integerOnly' => true),
            array('email', 'email'),
            array('subscribe', 'boolean'),
            array('email, kyiv_address, name, phone, post_city, post_warehouse, surname', 'length', 'max' => 255),
            array('kyiv_address, kyiv_message', 'safe')
        );
    }

    public function attributeLabels()
    {
        return array(
            'email' => 'Email',
            'kyiv_address' => 'Адрес',
            'kyiv_message' => 'Ваше сообщение',
            'name' => 'Имя',
            'phone' => 'Номер телефона',
            'post_address' => 'Адрес',
            'post_city' => 'Город',
            'post_warehouse' => 'Склад',
            'subscribe' => 'Подписаться на новости и скидки',
            'surname' => 'Фамилия',
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
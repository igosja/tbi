<?php

class Checkout extends CFormModel
{
    public $email;
    public $kyiv_address;
    public $kyiv_message;
    public $name;
    public $payment_id;
    public $phone;
    public $pickup;
    public $post_address;
    public $post_city;
    public $post_to_door;
    public $post_warehouse;
    public $shipping_id;
    public $subscribe = 1;
    public $surname;

    public function rules()
    {
        return array(
            array('email, name, phone, surname', 'required'),
            array('payment_id, pickup, shipping_id', 'numerical', 'integerOnly' => true),
            array('email', 'email'),
            array('post_to_door, subscribe', 'boolean'),
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
            'post_to_door' => 'Адресная доставка',
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
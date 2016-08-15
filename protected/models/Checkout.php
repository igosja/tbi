<?php

class Checkout extends CFormModel
{
    public $email;
    public $name;
    public $phone;
    public $subscribe;
    public $surname;

    public function rules()
    {
        return array(
            array('email, name, phone, surname', 'required'),
            array('email', 'email'),
            array('subscribe', 'boolean'),
            array('email, name, phone, surname', 'length', 'max' => 255),
        );
    }

    public function attributeLabels()
    {
        return array(
            'email' => 'Email',
            'name' => 'Имя',
            'phone' => 'Номер телефона',
            'subscribe' => 'Подписаться на новости и скидки',
            'surname' => 'Фамилия',
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
<?php

class Checkout extends CFormModel
{
    public $email;
    public $kyiv_address;
    public $kyiv_message;
    public $name;
    public $payment_id;
    public $phone;
    public $pickup_id;
    public $pickup_message;
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
            array('email, name, payment_id, phone, surname', 'required'),
            array('payment_id, pickup_id, shipping_id', 'numerical', 'integerOnly' => true),
            array('email', 'email'),
            array('email', 'emailcheck'),
            array('post_to_door, subscribe', 'boolean'),
            array('email, kyiv_address, name, phone, post_city, post_warehouse, surname', 'length', 'max' => 255),
            array('kyiv_address, kyiv_message, pickup_message', 'safe')
        );
    }

    public function attributeLabels()
    {
        return array(
            'email' => 'Email',
            'kyiv_address' => 'Адрес',
            'kyiv_message' => 'Ваше сообщение',
            'name' => 'Имя',
            'payment_id' => 'Способ оплаты',
            'phone' => 'Номер телефона',
            'pickup_message' => 'Ваше сообщение',
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
    
    public function emailcheck($attribute)
    {
        $error = false;
        if (Yii::app()->user->isGuest) {
            $count_email = User::model()->countByAttributes(array('email' => $this->$attribute));
            if (0 != $count_email) {
                $error = true;
            }
        } else {
            $count_email = User::model()->countByAttributes(array('email' => $this->$attribute, 'id' => Yii::app()->user->id));
            if (0 == $count_email) {
                $error = true;
            }
        }
        if (true == $error) {
            $this->addError(
                $attribute,
                'Этот email уже используется в системе.
                Введите другой email или
                <a href="javascript:;" class="overlayElementTrigger" data-selector="form-signIn" title="войдите">
                войдите
                </a>
                в свой аккаунт'
            );
        }
    }
}
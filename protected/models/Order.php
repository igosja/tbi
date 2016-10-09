<?php

class Order extends CActiveRecord
{
    public $day;
    public $month;

    public function tableName()
    {
        return 'order';
    }

    public function rules()
    {
        return array(
            array('date, status_id, user_id', 'numerical', 'integerOnly' => true),
            array('price', 'numerical', 'integerOnly' => false, 'min' => 0),
            array('price', 'match', 'pattern' => '/^[0-9]{1,9}(\.[0-9]{0,2})?$/'),
            array('address, email, name, payment, phone, price, shipping, status_id, surname, user_id', 'required'),
            array('message', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'address' => 'Адрес доставки',
            'date' => 'Время заказа',
            'email' => 'Email',
            'message' => 'Комментарий клиента',
            'name' => 'Имя',
            'payment' => 'Способ оплаты',
            'phone' => 'Телефон',
            'product' => 'Товары',
            'price' => 'Стоимость, грн',
            'shipping' => 'Способ доставки',
            'status_id' => 'Статус',
            'surname' => 'Фамилия',
            'user_id' => 'Профиль клиента',
        );
    }

    public function relations()
    {
        return array(
            'product' => array(self::HAS_MANY, 'OrderProduct', array('order_id' => 'id')),
            'status' => array(self::HAS_ONE, 'Status', array('id' => 'status_id')),
            'user' => array(self::HAS_ONE, 'User', array('id' => 'user_id')),
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('status_id', $this->status_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    protected function beforeSave()
    {
        if (parent::beforeSave()) {
            if ($this->isNewRecord) {
                $this->date = time();
            }
            return true;
        }
        return false;
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
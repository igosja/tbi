<?php

class OrderProduct extends CActiveRecord
{
    public function tableName()
    {
        return 'orderproduct';
    }

    public function rules()
    {
        return array(
            array('price', 'numerical', 'integerOnly' => false, 'min' => 0),
            array('price', 'match', 'pattern' => '/^[0-9]{1,9}(\.[0-9]{0,2})?$/'),
            array('order_id, product_id, quantity', 'numerical', 'integerOnly' => true),
            array('order_id, price, product_id, product_name, quantity', 'required'),
        );
    }

    public function relations()
    {
        return array(
            'product' => array(self::HAS_ONE, 'Product', array('id' => 'product_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
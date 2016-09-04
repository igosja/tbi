<?php

class CartProduct extends CActiveRecord
{
    public function tableName()
    {
        return 'cartproduct';
    }

    public function rules()
    {
        return array(
            array('cart_id, price, product_id, product_name, quantity', 'required'),
            array('cart_id, product_id, quantity', 'numerical', 'integerOnly' => true),
            array('price', 'numerical', 'integerOnly' => false, 'min' => 0),
            array('price', 'match', 'pattern' => '/^[0-9]{1,9}(\.[0-9]{0,2})?$/'),
            array('product_name', 'length', 'max' => 255),
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
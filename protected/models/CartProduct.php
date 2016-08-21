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
            array('cart_id, product_id, quantity', 'numerical', 'integerOnly' => true),
            array('cart_id, product_id, quantity', 'required'),
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
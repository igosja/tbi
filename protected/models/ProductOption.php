<?php

class ProductOption extends CActiveRecord
{
    public function tableName()
    {
        return 'productoption';
    }

    public function rules()
    {
        return array(
            array('name, plus, price, product_id', 'required'),
            array('plus, product_id', 'numerical', 'integerOnly' => true),
            array('price', 'numerical', 'integerOnly' => false, 'min' => 0),
            array('price', 'match', 'pattern' => '/^[0-9]{1,9}(\.[0-9]{0,2})?$/'),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}

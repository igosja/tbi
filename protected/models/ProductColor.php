<?php

class ProductColor extends CActiveRecord
{
    public function tableName()
    {
        return 'productcolor';
    }

    public function rules()
    {
        return array(
            array('color_id, product_id', 'required'),
            array('color_id, product_id', 'numerical', 'integerOnly' => true),
        );
    }

    public function relations()
    {
        return array(
            'color' => array(self::HAS_ONE, 'Color', array('id' => 'color_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}

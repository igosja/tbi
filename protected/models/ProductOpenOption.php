<?php

class ProductOpenOption extends CActiveRecord
{
    public function tableName()
    {
        return 'productopenoption';
    }

    public function rules()
    {
        return array(
            array('openoption_id, product_id', 'required'),
            array('openoption_id, product_id', 'numerical', 'integerOnly' => true),
        );
    }

    public function relations()
    {
        return array(
            'openoption' => array(self::HAS_ONE, 'OpenOption', array('id' => 'openoption_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}

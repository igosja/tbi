<?php

class ProductApplication extends CActiveRecord
{
    public function tableName()
    {
        return 'productapplication';
    }

    public function rules()
    {
        return array(
            array('application_id, product_id', 'required'),
            array('application_id, product_id', 'numerical', 'integerOnly' => true),
        );
    }

    public function relations()
    {
        return array(
            'application' => array(self::HAS_ONE, 'Application', array('id' => 'application_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}

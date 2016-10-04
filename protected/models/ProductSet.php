<?php

class ProductSet extends CActiveRecord
{
    public function tableName()
    {
        return 'productset';
    }

    public function rules()
    {
        return array(
            array('child_id, parent_id', 'required'),
            array('child_id, parent_id', 'numerical', 'integerOnly' => true),
        );
    }

    public function relations()
    {
        return array(
            'product' => array(self::HAS_ONE, 'Product', array('id' => 'child_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}

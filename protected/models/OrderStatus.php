<?php

class OrderStatus extends CActiveRecord
{
    public function tableName()
    {
        return 'orderstatus';
    }

    public function rules()
    {
        return array(
            array('date, order_id', 'numerical', 'integerOnly' => true),
            array('order_id, status', 'required'),
        );
    }

    public function relations()
    {
        return array(
            'order' => array(self::HAS_ONE, 'Order', array('id' => 'order_id')),
        );
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
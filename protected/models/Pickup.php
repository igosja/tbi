<?php

class Pickup extends CActiveRecord
{
    public function rules()
    {
        return array(
            array('address, name, phone', 'required'),
            array('order, status', 'numerical', 'integerOnly' => true),
            array('address, name, phone', 'length', 'max' => 255),
            array('id, name', 'safe', 'on' => 'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'address' => 'Адресс',
            'name' => 'Название',
            'phone' => 'Телефон',
            'status' => 'Статус',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}

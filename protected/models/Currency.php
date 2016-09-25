<?php

class Currency extends CActiveRecord
{
    public function tableName()
    {
        return 'currency';
    }

    public function rules()
    {
        return array(
            array('name, rate', 'required'),
            array('order, status', 'numerical', 'integerOnly' => true),
            array('rate', 'numerical', 'integerOnly' => false, 'min' => 0),
            array('rate', 'match', 'pattern' => '/^[0-9]{1,9}(\.[0-9]{0,2})?$/'),
            array('name', 'length', 'max' => 255),
            array('id, name', 'safe', 'on' => 'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'name' => 'Название',
            'rate' => 'Курс',
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

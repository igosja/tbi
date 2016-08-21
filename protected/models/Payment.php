<?php

class Payment extends CActiveRecord
{
    public function tableName()
    {
        return 'payment';
    }

    public function rules()
    {
        return array(
            array('name, text', 'required'),
            array('order, status', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 255),
            array('text', 'safe'),
            array('id, name', 'safe', 'on' => 'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'name' => 'Название',
            'text' => 'Описание',
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

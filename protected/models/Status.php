<?php

class Status extends CActiveRecord
{
    public function tableName()
    {
        return 'status';
    }

    public function rules()
    {
        return array(
            array('name', 'required'),
            array('order', 'numerical', 'integerOnly' => true),
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

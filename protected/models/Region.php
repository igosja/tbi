<?php

class Region extends CActiveRecord
{
    public function rules()
    {
        return array(
            array('country_id, name', 'required'),
            array('country_id, status', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 255),
            array('id, country_id, name', 'safe', 'on' => 'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'name' => 'Название',
            'country_id' => 'Страна',
        );
    }

    public function relations()
    {
        return array(
            'country' => array(self::HAS_ONE, 'Country', array('id' => 'country_id')),
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('country_id', $this->country_id);
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

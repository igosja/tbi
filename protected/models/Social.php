<?php

class Social extends CActiveRecord
{
    public function tableName()
    {
        return 'social';
    }

    public function rules()
    {
        return array(
            array('class, name, web', 'required'),
            array('order, status', 'numerical', 'integerOnly' => true),
            array('class, name, web', 'length', 'max' => 255),
            array('web', 'url'),
            array('id, name', 'safe', 'on' => 'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'class' => 'Css класс',
            'name' => 'Название',
            'status' => 'Статус',
            'web' => 'Ссылка',
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

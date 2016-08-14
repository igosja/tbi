<?php

class Vacancy extends CActiveRecord
{
    public function rules()
    {
        return array(
            array('city, conditions, position, requirements, salary', 'required'),
            array('order, salary, status', 'numerical', 'integerOnly' => true),
            array('city, position', 'length', 'max' => 255),
            array('conditions, requirements', 'safe'),
            array('id, position', 'safe', 'on' => 'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'city' => 'Место работы',
            'conditions' => 'Условия труда',
            'position' => 'Должность',
            'requirements' => 'Требования',
            'salary' => 'Оплата труда, грн.',
            'status' => 'Статус',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('position', $this->position, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}

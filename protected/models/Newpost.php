<?php

class Newpost extends CActiveRecord
{
    public function tableName()
    {
        return 'newpost';
    }

    public function rules()
    {
        return array(
            array('key', 'length', 'max' => 255),
        );
    }

    public function attributeLabels()
    {
        return array(
            'key' => 'Ключ доступа',
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
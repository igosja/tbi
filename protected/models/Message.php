<?php

class Message extends CActiveRecord
{
    public function tableName()
    {
        return 'call';
    }

    public function rules()
    {
        return array(
            array('email, name, phone, text', 'required'),
            array('email', 'email'),
            array('email, name, phone', 'length', 'max' => 255),
        );
    }

    public function attributeLabels()
    {
        return array(
            'email' => 'Email',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'text' => 'Сообщение',
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

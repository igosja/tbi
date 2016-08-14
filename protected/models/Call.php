<?php

class Call extends CActiveRecord
{
    public function rules()
    {
        return array(
            array('email, name, phone', 'required'),
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

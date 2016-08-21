<?php

class Subscribe extends CActiveRecord
{

    public function tableName()
    {
        return 'subscribe';
    }

    public function rules()
    {
        return array(
            array('email', 'required'),
            array('email', 'email'),
            array('email', 'length', 'max' => 255),
        );
    }

    public function attributeLabels()
    {
        return array(
            'email' => 'Введите ваш email',
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

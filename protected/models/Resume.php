<?php

class Resume extends CActiveRecord
{
    public function tableName()
    {
        return 'resume';
    }

    public function rules()
    {
        return array(
            array('email, name, phone, position, text', 'required'),
            array('email', 'email'),
            array('email, name, phone, position', 'length', 'max' => 255),
        );
    }

    public function attributeLabels()
    {
        return array(
            'email' => 'Email',
            'file' => '.pdf .doc .docx',
            'name' => 'Ф.И.О.',
            'phone' => 'Телефон',
            'position' => 'Должность',
            'text' => 'Сопроводительное письмо',
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

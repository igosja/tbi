<?php

class Resume extends CActiveRecord
{
    public $answer;

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
            'answer' => 'Ответ',
            'date' => 'Время обращения',
            'email' => 'Email',
            'file' => '.pdf .doc .docx',
            'name' => 'Ф.И.О.',
            'phone' => 'Телефон',
            'position' => 'Должность',
            'text' => 'Сопроводительное письмо',
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

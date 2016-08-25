<?php

class Call extends CActiveRecord
{
    public function tableName()
    {
        return 'call';
    }

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
            'date' => 'Время обращения',
            'email' => 'Email',
            'name' => 'Имя',
            'phone' => 'Телефон',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('phone', $this->phone, true);

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

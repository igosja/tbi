<?php

class Faq extends CActiveRecord
{
    public function tableName()
    {
        return 'faq';
    }

    public function rules()
    {
        return array(
            array('question, answer', 'required'),
            array('order, status', 'numerical', 'integerOnly' => true),
            array('question', 'length', 'max' => 255),
            array('id, question', 'safe', 'on' => 'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'question' => 'Вопрос',
            'answer' => 'Ответ',
            'status' => 'Статус',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('question', $this->question, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}

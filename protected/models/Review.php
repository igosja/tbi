<?php

class Review extends CActiveRecord
{
    public function tableName()
    {
        return 'review';
    }

    public function rules()
    {
        return array(
            array('ask, name, product_id, sex_id', 'required'),
            array('answer_date, ask_date, product_id, sex_id', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 255),
            array('answer, ask', 'safe'),
        );
    }

    public function relations()
    {
        return array(
            'product' => array(self::HAS_ONE, 'Product', array('id' => 'product_id')),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'answer' => 'Ответ',
            'answer_date' => 'Время ответа',
            'ask' => 'Вопрос',
            'ask_date' => 'Время вопроса',
            'name' => 'Имя',
            'product_id' => 'Товар',
            'sex_id' => 'Пол',
        );
    }

    protected function beforeSave()
    {
        if (parent::beforeSave()) {
            if ($this->isNewRecord) {
                $this->ask_date = time();
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

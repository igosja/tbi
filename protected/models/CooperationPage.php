<?php

class CooperationPage extends CActiveRecord
{
    public function tableName()
    {
        return 'cooperationpage';
    }

    public function rules()
    {
        return array(
            array('dealer, designer, text_footer, text_header', 'required'),
            array('seo_title', 'length', 'max' => 255),
            array('seo_description, seo_keywords', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'dealer' => 'Диллерам',
            'designer' => 'Архитекторам и дизайнерам',
            'text_footer' => 'Заключительный текст',
            'text_header' => 'Вступительный текст',
            'seo_description' => 'SEO description',
            'seo_keywords' => 'SEO keywords',
            'seo_title' => 'SEO title',
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
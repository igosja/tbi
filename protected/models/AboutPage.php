<?php

class AboutPage extends CActiveRecord
{
    public function tableName()
    {
        return 'aboutpage';
    }

    public function rules()
    {
        return array(
            array('text, name', 'required'),
            array('name, seo_title', 'length', 'max' => 255),
            array('seo_description, seo_keywords', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'name' => 'Заголовок',
            'text' => 'Текст',
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
<?php

class CertificatePage extends CActiveRecord
{
    public function tableName()
    {
        return 'certificatepage';
    }

    public function rules()
    {
        return array(
            array('text, title, name', 'required'),
            array('name, title, seo_title', 'length', 'max' => 255),
            array('seo_description, seo_keywords', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'name' => 'Название',
            'text' => 'Текст',
            'title' => 'Заголовок',
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
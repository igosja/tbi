<?php

class ServicePage extends CActiveRecord
{
    public function tableName()
    {
        return 'servicepage';
    }

    public function rules()
    {
        return array(
            array('name, text', 'required'),
            array('image_id', 'numerical', 'integerOnly' => true),
            array('name, seo_title', 'length', 'max' => 255),
            array('seo_description, seo_keywords', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'image_id' => 'Изображение',
            'name' => 'Заголовок текста',
            'text' => 'Текст',
            'seo_description' => 'SEO description',
            'seo_keywords' => 'SEO keywords',
            'seo_title' => 'SEO title',
        );
    }

    public function relations()
    {
        return array(
            'image' => array(self::HAS_ONE, 'Image', array('id' => 'image_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
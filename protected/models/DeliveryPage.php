<?php

class DeliveryPage extends CActiveRecord
{
    public function tableName()
    {
        return 'deliverypage';
    }

    public function rules()
    {
        return array(
            array('text', 'required'),
            array('image_id', 'numerical', 'integerOnly' => true),
            array('seo_title', 'length', 'max' => 255),
            array('seo_description, seo_keywords', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'image_id' => 'Изображение',
            'text' => 'Сноска',
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
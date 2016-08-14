<?php

class Contacts extends CActiveRecord
{
    public function rules()
    {
        return array(
            array('office_address, office_email, office_lat, office_lng, office_name, office_phone, salon_address, salon_email, salon_lat, salon_lng, salon_name, salon_phone, text', 'required'),
            array('office_address, office_email, office_lat, office_lng, office_name, office_phone, salon_address, salon_email, salon_lat, salon_lng, salon_name, salon_phone, seo_title', 'length', 'max' => 255),
            array('seo_description, seo_keywords', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'office_address' => 'Адресс офиса (через ;)',
            'office_email' => 'Email офиса',
            'office_lat' => 'Офис, первая координата гугл карты',
            'office_lng' => 'Офис, вторая координата гугл карты',
            'office_name' => 'Название офиса',
            'office_phone' => 'Телефоны офиса (через ;)',
            'salon_address' => 'Адресс салона (через ;)',
            'salon_email' => 'Email салона',
            'salon_lat' => 'Салон, первая координата гугл карты',
            'salon_lng' => 'Салон, вторая координата гугл карты',
            'salon_name' => 'Название салона',
            'salon_phone' => 'Телефоны салона (через ;)',
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
<?php

class PaymentPage extends CActiveRecord
{
    public function rules()
    {
        return array(
            array('card_name, card_text, cash_name, cash_text, receipt_name, receipt_text, text', 'required'),
            array('card_name, cash_name, receipt_name, seo_title', 'length', 'max' => 255),
            array('seo_description, seo_keywords', 'safe'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'card_name' => 'Карточка (заголовок)',
            'card_text' => 'Карточка (описание)',
            'cash_name' => 'Наличные (заголовок)',
            'cash_text' => 'Наличные (описание)',
            'receipt_name' => 'Безнал (заголовок)',
            'receipt_text' => 'Безнал (описание)',
            'text' => 'Вступительный текст',
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
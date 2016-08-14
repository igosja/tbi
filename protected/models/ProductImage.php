<?php

class ProductImage extends CActiveRecord
{
    public function rules()
    {
        return array(
            array('image_id, product_id', 'required'),
            array('image_id, product_id', 'numerical', 'integerOnly' => true),
        );
    }

    public function relations()
    {
        return array(
            'image' => array(self::HAS_ONE, 'Image', array('id' => 'image_id')),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'category_id' => 'Категория',
            'name' => 'Название',
            'price' => 'Цена, грн',
            'status' => 'Статус',
            'text' => 'Описание',
            'url' => 'ЧП Url',
            'seo_description' => 'SEO description',
            'seo_keywords' => 'SEO keywords',
            'seo_title' => 'SEO title',
        );
    }

    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            if (0 < $this->image_id) {
                $o_image = Image::model()->findByPk($this->image_id);
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . $o_image->url)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . $o_image->url);
                }
                $o_image->delete();
            }
        }
        return true;
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}

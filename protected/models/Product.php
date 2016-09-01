<?php

class Product extends CActiveRecord
{
    public function tableName()
    {
        return 'product';
    }

    public function rules()
    {
        return array(
            array('brand_id, category_id, name, price, sku, text', 'required'),
            array('brand_id, category_id, order, status', 'numerical', 'integerOnly' => true),
            array('price', 'numerical', 'integerOnly' => false, 'min' => 0),
            array('price', 'match', 'pattern' => '/^[0-9]{1,9}(\.[0-9]{0,2})?$/'),
            array('name, url, seo_title', 'length', 'max' => 255),
            array('seo_description, seo_keywords', 'safe'),
            array('id, name, sku', 'safe', 'on' => 'search'),
        );
    }

    public function relations()
    {
        return array(
            'brand' => array(self::HAS_ONE, 'Brand', array('id' => 'brand_id')),
            'category' => array(self::HAS_ONE, 'Category', array('id' => 'category_id')),
            'image' => array(self::HAS_MANY, 'ProductImage', array('product_id' => 'id')),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'brand_id' => 'Бренд',
            'category_id' => 'Категория',
            'image_id' => 'Изображения',
            'name' => 'Название',
            'price' => 'Цена, грн',
            'sku' => 'Артикул',
            'status' => 'Статус',
            'text' => 'Описание',
            'url' => 'ЧП Url',
            'seo_description' => 'SEO description',
            'seo_keywords' => 'SEO keywords',
            'seo_title' => 'SEO title',
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            $a_image = ProductImage::model()->findAllByAttributes(array('product_id' => $this->id));
            foreach ($a_image as $item) {
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . $item->url)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . $item->url);
                }
                $item->delete();
            }
        }
        return true;
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}

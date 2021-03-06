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
            array('brand_id, category_id, name, price, sku, text, view_id', 'required'),
            array('brand_id, catalog_id, category_id, date, order, status, sheet_id, view_id', 'numerical', 'integerOnly' => true),
            array('price', 'numerical', 'integerOnly' => false, 'min' => 0),
            array('price', 'match', 'pattern' => '/^[0-9]{1,9}(\.[0-9]{0,2})?$/'),
            array('name, url, seo_title', 'length', 'max' => 255),
            array('infliction, equipment, rules, technical_characteristics, youtube, seo_description, seo_keywords', 'safe'),
            array('id, name, sku', 'safe', 'on' => 'search'),
        );
    }

    public function relations()
    {
        return array(
            'application' => array(self::HAS_MANY, 'ProductApplication', array('product_id' => 'id')),
            'brand' => array(self::HAS_ONE, 'Brand', array('id' => 'brand_id')),
            'catalog' => array(self::HAS_ONE, 'Image', array('id' => 'catalog_id')),
            'category' => array(self::HAS_ONE, 'Category', array('id' => 'category_id')),
            'color' => array(self::HAS_MANY, 'ProductColor', array('product_id' => 'id')),
            'image' => array(self::HAS_MANY, 'ProductImage', array('product_id' => 'id')),
            'incision' => array(self::HAS_ONE, 'Image', array('id' => 'incision_id')),
            'openoption' => array(self::HAS_MANY, 'ProductOpenOption', array('product_id' => 'id')),
            'option' => array(self::HAS_MANY, 'ProductOption', array('product_id' => 'id')),
            'review' => array(self::HAS_MANY, 'Review', array('product_id' => 'id')),
            'set' => array(self::HAS_MANY, 'ProductSet', array('parent_id' => 'id')),
            'sheet' => array(self::HAS_ONE, 'Image', array('id' => 'sheet_id')),
            'view' => array(self::HAS_ONE, 'View', array('id' => 'view_id')),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'application' => '????????????????????',
            'brand_id' => '??????????',
            'catalog_id' => '??????????????, pdf',
            'category_id' => '??????????????????',
            'color' => '?????????????????? ??????????',
            'incision_id' => '???????????? ??????????????',
            'infliction' => '????????????????????',
            'equipment' => '????????????????????????',
            'image_id' => '??????????????????????',
            'infliction_id' => '???????????? ??????????????',
            'name' => '????????????????',
            'price' => '????????, ??????',
            'openoption' => '???????????????? ????????????????????',
            'rules' => '?????????????? ??????????????????????????',
            'set' => '????????????????',
            'sheet_id' => '??????. ????????, pdf',
            'sku' => '??????????????',
            'status' => '????????????',
            'technical_characteristics' => '??????. ????????????????????????????',
            'text' => '????????????????',
            'url' => '???? Url',
            'view_id' => '???????????? ????????????????',
            'youtube' => '???????? ?????????? ?? youtube (?????????? ;)',
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

    public function beforeSave()
    {
        if (parent::beforeSave()) {
            if (!$this->date) {
                $this->date = time();
            }
        }
        return true;
    }

    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            $a_image = ProductImage::model()->findAllByAttributes(array('product_id' => $this->id));
            foreach ($a_image as $item) {
                if (isset($item->url)) {
                    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $item->url)) {
                        unlink($_SERVER['DOCUMENT_ROOT'] . $item->url);
                    }
                }
                $item->delete();
            }
            $o_catalog = Image::model()->findByPk($this->catalog_id);
            if (isset($o_catalog->url)) {
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . $o_catalog->url)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . $o_catalog->url);
                }
            }
            $o_catalog->delete();
            $o_incision = Image::model()->findByPk($this->incision_id);
            if (isset($o_incision->url)) {
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . $o_incision->url)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . $o_incision->url);
                }
            }
            $o_incision->delete();
            $o_sheet = Image::model()->findByPk($this->sheet_id);
            if (isset($o_sheet->url)) {
                if (file_exists($_SERVER['DOCUMENT_ROOT'] . $o_sheet->url)) {
                    unlink($_SERVER['DOCUMENT_ROOT'] . $o_sheet->url);
                }
            }
            $o_sheet->delete();
            ProductApplication::model()->deleteAllByAttributes(array('product_id' => $this->id));
            ProductColor::model()->deleteAllByAttributes(array('product_id' => $this->id));
            ProductOpenOption::model()->deleteAllByAttributes(array('product_id' => $this->id));
            ProductOption::model()->deleteAllByAttributes(array('product_id' => $this->id));
            ProductPopular::model()->deleteAllByAttributes(array('product_id' => $this->id));
            ProductSet::model()->deleteAllByAttributes(array('parent_id' => $this->id));
            ProductSet::model()->deleteAllByAttributes(array('child_id' => $this->id));
            Review::model()->deleteAllByAttributes(array('product_id' => $this->id));
        }
        return true;
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}

<?php

class Category extends CActiveRecord
{
    public function tableName()
    {
        return 'category';
    }

    public function rules()
    {
        return array(
            array('name, text', 'required'),
            array('image_id, order, status', 'numerical', 'integerOnly' => true),
            array('name, url, seo_title', 'length', 'max' => 255),
            array('seo_description, seo_keywords', 'safe'),
            array('id, name', 'safe', 'on' => 'search'),
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
            'image_id' => 'Изображение',
            'name' => 'Название',
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

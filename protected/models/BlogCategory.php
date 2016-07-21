<?php

class BlogCategory extends CActiveRecord
{
    public function tableName()
    {
        return 'blogcategory';
    }

    public function rules()
    {
        return array(
            array('name', 'required'),
            array('order, status', 'numerical', 'integerOnly' => true),
            array('name, url, seo_title', 'length', 'max' => 255),
            array('seo_description, seo_keywords', 'safe'),
            array('id, name', 'safe', 'on' => 'search'),
        );
    }

    public function relations()
    {
        return array(
            'blog' => array(self::HAS_MANY, 'Blog', array('blogcategory_id' => 'id')),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'name' => 'Название',
            'status' => 'Статус',
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

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}

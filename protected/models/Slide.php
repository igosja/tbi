<?php

class Slide extends CActiveRecord
{
    public function tableName()
    {
        return 'slide';
    }

    public function rules()
    {
        return array(
            array('image_id, product_id, status, order', 'numerical', 'integerOnly' => true),
            array('id', 'safe', 'on' => 'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'image_id' => 'Изображение',
            'product_id' => 'Товар',
            'status' => 'Статус',
        );
    }

    public function relations()
    {
        return array(
            'image' => array(self::HAS_ONE, 'Image', array('id' => 'image_id')),
            'product' => array(self::HAS_ONE, 'Product', array('id' => 'product_id')),
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);

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

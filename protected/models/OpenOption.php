<?php

class OpenOption extends CActiveRecord
{
    public function tableName()
    {
        return 'openoption';
    }

    public function rules()
    {
        return array(
            array('name', 'required'),
            array('image_id', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 255),
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
                if (isset($o_image->url)) {
                    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $o_image->url)) {
                        unlink($_SERVER['DOCUMENT_ROOT'] . $o_image->url);
                    }
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

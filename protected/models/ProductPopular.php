<?php

class ProductPopular extends CActiveRecord
{
    public function tableName()
    {
        return 'productpopular';
    }

    public function rules()
    {
        return array(
            array('product_id', 'required'),
            array('product_id', 'numerical', 'integerOnly' => true),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'product_id' => 'Товар',
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

    public function relations()
    {
        return array(
            'product' => array(self::HAS_ONE, 'Product', array('id' => 'product_id')),
        );
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}

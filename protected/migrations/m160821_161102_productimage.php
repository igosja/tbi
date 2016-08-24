<?php

class m160821_161102_productimage extends CDbMigration
{
    public function up()
    {
        $this->createTable('productimage', array(
            'id' => 'pk',
            'image_id' => 'int(11) DEFAULT 0',
            'product_id' => 'int(11) DEFAULT 0',
        ));

        $this->createIndex('image_id', 'productimage', 'image_id');
        $this->createIndex('product_id', 'productimage', 'product_id');

        $this->insert('productimage', array(
            'image_id' => '24',
            'product_id' => '1',
        ));

        $this->insert('productimage', array(
            'image_id' => '38',
            'product_id' => '2',
        ));
    }

    public function down()
    {
        $this->dropTable('productimage');
    }
}
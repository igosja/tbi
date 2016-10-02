<?php

class m161001_073306_productcolor extends CDbMigration
{
    public function up()
    {
        $this->createTable('productcolor', array(
            'id' => 'pk',
            'color_id' => 'int(11) DEFAULT 0',
            'product_id' => 'int(11) DEFAULT 0',
        ));

        $this->createIndex('product_id', 'productcolor', 'product_id');
        $this->createIndex('color_id', 'productcolor', 'color_id');
    }

    public function down()
    {
        $this->dropTable('productcolor');
    }
}
<?php

class m161005_173730_slide extends CDbMigration
{
    public function up()
    {
        $this->createTable('slide', array(
            'id' => 'pk',
            'image_id' => 'int(11) DEFAULT 0',
            'product_id' => 'int(11) DEFAULT 0',
            'order' => 'int(11) DEFAULT 0',
            'status' => 'int(1) DEFAULT 1',
        ));

        $this->createIndex('image_id', 'slide', 'image_id');
        $this->createIndex('product_id', 'slide', 'product_id');
    }

    public function down()
    {
        $this->dropTable('slide');
    }
}
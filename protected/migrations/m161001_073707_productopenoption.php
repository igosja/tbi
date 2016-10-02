<?php

class m161001_073707_productopenoption extends CDbMigration
{
    public function up()
    {
        $this->createTable('productopenoption', array(
            'id' => 'pk',
            'openoption_id' => 'int(11) DEFAULT 0',
            'product_id' => 'int(11) DEFAULT 0',
        ));

        $this->createIndex('product_id', 'productopenoption', 'product_id');
        $this->createIndex('openoption_id', 'productopenoption', 'openoption_id');
    }

    public function down()
    {
        $this->dropTable('productopenoption');
    }
}
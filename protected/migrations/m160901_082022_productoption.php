<?php

class m160901_082022_productoption extends CDbMigration
{
    public function up()
    {
        $this->createTable('productoption', array(
            'id' => 'pk',
            'name' => 'varchar(255) NOT NULL',
            'plus' => 'tinyint(1) DEFAULT 0',
            'price' => 'decimal(10,2) DEFAULT 0',
            'product_id' => 'int(11) DEFAULT 0',
        ));

        $this->createIndex('product_id', 'productoption', 'product_id');
    }

    public function down()
    {
        $this->dropTable('productoption');
    }
}
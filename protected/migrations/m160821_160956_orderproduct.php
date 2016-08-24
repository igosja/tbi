<?php

class m160821_160956_orderproduct extends CDbMigration
{
    public function up()
    {
        $this->createTable('orderproduct', array(
            'id' => 'pk',
            'order_id' => 'int(11) DEFAULT 0',
            'price' => 'decimal(10,2) DEFAULT 0',
            'product_id' => 'int(11) DEFAULT 0',
            'product_name' => 'varchar(255) NOT NULL',
            'quantity' => 'int(11) DEFAULT 0',
        ));

        $this->createIndex('order_id', 'orderproduct', 'order_id');
        $this->createIndex('product_id', 'orderproduct', 'product_id');
    }

    public function down()
    {
        $this->dropTable('orderproduct');
    }
}
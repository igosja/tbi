<?php

class m160821_160708_cartproduct extends CDbMigration
{
    public function up()
    {
        $this->createTable('cartproduct', array(
            'id' => 'pk',
            'cart_id' => 'int(11) DEFAULT 0',
            'product_id' => 'int(11) DEFAULT 0',
            'quantity' => 'int(11) DEFAULT 0',
        ));

        $this->createIndex('cart_id', 'cartproduct', 'cart_id');
        $this->createIndex('product_id', 'cartproduct', 'product_id');

        $this->insert('cartproduct', array(
            'cart_id' => '1',
            'product_id' => '2',
            'quantity' => '1',
        ));

        $this->insert('cartproduct', array(
            'cart_id' => '1',
            'product_id' => '1',
            'quantity' => '4',
        ));
    }

    public function down()
    {
        $this->dropTable('cartproduct');
    }
}
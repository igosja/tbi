<?php

class m160903_171750_cart_order extends CDbMigration
{
    public function up()
    {
        $this->addColumn('cartproduct', 'product_name', 'varchar(255) NOT NULL AFTER product_id');
        $this->addColumn('cartproduct', 'price', 'decimal(10,2) DEFAULT 0 AFTER cart_id');
    }

    public function down()
    {
        $this->dropColumn('cartproduct', 'product_name');
        $this->dropColumn('cartproduct', 'price');
    }
}
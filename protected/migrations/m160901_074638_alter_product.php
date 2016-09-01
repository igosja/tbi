<?php

class m160901_074638_alter_product extends CDbMigration
{
    public function up()
    {
        $this->addColumn('product', 'brand_id', 'int(11) DEFAULT 0 AFTER id');

        $this->createIndex('brand_id', 'product', 'brand_id');
    }

    public function down()
    {
        $this->dropColumn('product', 'brand_id');

        $this->dropIndex('brand_id', 'product');
    }
}
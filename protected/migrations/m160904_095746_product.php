<?php

class m160904_095746_product extends CDbMigration
{
    public function up()
    {
        $this->addColumn('product', 'youtube', 'varchar(255) NOT NULL AFTER `view_id`');
        $this->addColumn('product', 'catalog', 'int(11) DEFAULT 0 AFTER `brand_id`');
        $this->addColumn('product', 'infliction', 'text NOT NULL AFTER `category_id`');
        $this->addColumn('product', 'technical_sheet', 'int(11) DEFAULT 0 AFTER `status`');
        $this->addColumn('product', 'technical_characteristics', 'text NOT NULL AFTER `status`');
        $this->addColumn('product', 'equipment', 'text NOT NULL AFTER `category_id`');

        $this->createIndex('catalog', 'product', 'catalog');
        $this->createIndex('technical_sheet', 'product', 'technical_sheet');
    }

    public function down()
    {
        $this->dropIndex('catalog', 'product');
        $this->dropIndex('technical_sheet', 'product');

        $this->dropColumn('product', 'youtube');
        $this->dropColumn('product', 'catalog_id');
        $this->dropColumn('product', 'infliction');
        $this->dropColumn('product', 'technical_sheet');
        $this->dropColumn('product', 'technical_characteristics');
        $this->dropColumn('product', 'equipment');
    }
}
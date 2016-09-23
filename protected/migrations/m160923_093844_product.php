<?php

class m160923_093844_product extends CDbMigration
{
    public function up()
    {
        $this->addColumn('product', 'date', 'int(11) DEFAULT 0 AFTER category_id');
        $this->addColumn('product', 'in_stock', 'int(11) DEFAULT 0 AFTER equipment');
        $this->addColumn('product', 'sales', 'int(11) DEFAULT 0 AFTER technical_characteristics');
    }

    public function down()
    {
        $this->dropColumn('product', 'date');
        $this->dropColumn('product', 'in_stock');
        $this->dropColumn('product', 'sales');
    }
}
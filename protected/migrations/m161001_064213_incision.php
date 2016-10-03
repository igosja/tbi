<?php

class m161001_064213_incision extends CDbMigration
{
    public function up()
    {
        $this->addColumn('product', 'incision_id', 'int(11) DEFAULT 0 AFTER infliction');

        $this->createIndex('incision_id', 'product', 'incision_id');
    }

    public function down()
    {
        $this->dropIndex('incision_id', 'product');

        $this->dropColumn('product', 'incision_id');
    }
}
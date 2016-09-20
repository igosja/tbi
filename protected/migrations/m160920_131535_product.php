<?php

class m160920_131535_product extends CDbMigration
{
    public function up()
    {
        $this->addColumn('product', 'rules', 'text NOT NULL AFTER price');
    }

    public function down()
    {
        $this->dropColumn('product', 'rules');
    }
}
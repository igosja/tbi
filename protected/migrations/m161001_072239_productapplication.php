<?php

class m161001_072239_productapplication extends CDbMigration
{
    public function up()
    {
        $this->createTable('productapplication', array(
            'id' => 'pk',
            'application_id' => 'int(11) DEFAULT 0',
            'product_id' => 'int(11) DEFAULT 0',
        ));

        $this->createIndex('application_id', 'productapplication', 'application_id');
        $this->createIndex('product_id', 'productapplication', 'product_id');
    }

    public function down()
    {
        $this->dropTable('productapplication');
    }
}
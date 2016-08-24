<?php

class m160821_161006_orderstatus extends CDbMigration
{
    public function up()
    {
        $this->createTable('orderstatus', array(
            'id' => 'pk',
            'date' => 'int(11) DEFAULT 0',
            'order_id' => 'int(11) DEFAULT 0',
            'status_id' => 'int(11) DEFAULT 0',
        ));

        $this->createIndex('order_id', 'orderstatus', 'order_id');
        $this->createIndex('status_id', 'orderstatus', 'status_id');
    }

    public function down()
    {
        $this->dropTable('orderstatus');
    }
}
<?php

class m160821_160947_order extends CDbMigration
{
    public function up()
    {
        $this->createTable('order', array(
            'id' => 'pk',
            'address' => 'varchar(255) NOT NULL',
            'date' => 'int(11) DEFAULT 0',
            'email' => 'varchar(255) NOT NULL',
            'message' => 'text NOT NULL',
            'name' => 'varchar(255) NOT NULL',
            'payment' => 'varchar(255) NOT NULL',
            'phone' => 'varchar(255) NOT NULL',
            'price' => 'decimal(10,2) DEFAULT 0',
            'shipping' => 'varchar(255) NOT NULL',
            'status_id' => 'int(11) DEFAULT 0',
            'surname' => 'varchar(255) NOT NULL',
            'user_id' => 'int(11) DEFAULT 0',
        ));

        $this->createIndex('status_id', 'order', 'status_id');
        $this->createIndex('user_id', 'order', 'user_id');
    }

    public function down()
    {
        $this->dropTable('order');
    }
}
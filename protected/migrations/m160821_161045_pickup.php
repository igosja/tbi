<?php

class m160821_161045_pickup extends CDbMigration
{
    public function up()
    {
        $this->createTable('pickup', array(
            'id' => 'pk',
            'address' => 'varchar(255) NOT NULL',
            'name' => 'varchar(255) NOT NULL',
            'order' => 'int(11) DEFAULT 0',
            'phone' => 'varchar(255) NOT NULL',
            'status' => 'tinyint(1) DEFAULT 1',
        ));

        $this->createIndex('order', 'pickup', 'order');
        $this->createIndex('status', 'pickup', 'status');

        $this->insert('pickup', array(
            'address' => 'ул. Гоголевская, 15',
            'name' => 'Салон "VOGUE INTERIORS"',
            'order' => '0',
            'phone' => '(044) 482-01-01',
            'status' => '1',
        ));

        $this->insert('pickup', array(
            'address' => 'ул. Гоголевская, 23',
            'name' => 'Компания "ТБИ"',
            'order' => '1',
            'phone' => '(050) 481-01-01',
            'status' => '1',
        ));
    }

    public function down()
    {
        $this->dropTable('pickup');
    }
}
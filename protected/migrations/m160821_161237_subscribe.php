<?php

class m160821_161237_subscribe extends CDbMigration
{
    public function up()
    {
        $this->createTable('subscribe', array(
            'id' => 'pk',
            'date' => 'int(11) DEFAULT 0',
            'email' => 'varchar(255) NOT NULL',
            'status' => 'tinyint(1) DEFAULT 1',
        ));

        $this->createIndex('status', 'subscribe', 'status');

        $this->insert('subscribe', array(
            'date' => '1471091485',
            'email' => 'igosja@ukr.net',
            'status' => '1',
        ));
    }

    public function down()
    {
        $this->dropTable('subscribe');
    }
}
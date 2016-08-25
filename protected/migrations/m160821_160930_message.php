<?php

class m160821_160930_message extends CDbMigration
{
    public function up()
    {
        $this->createTable('message', array(
            'id' => 'pk',
            'date' => 'int(11) DEFAULT 0',
            'email' => 'varchar(255) NOT NULL',
            'name' => 'varchar(255) NOT NULL',
            'phone' => 'varchar(255) NOT NULL',
            'status' => 'tinyint(1) DEFAULT 0',
            'text' => 'text NOT NULL',
        ));

        $this->createIndex('status', 'message', 'status');

        $this->insert('message', array(
            'date' => '1471096229',
            'email' => 'igosja@ukr.net',
            'name' => 'Игорь',
            'phone' => '(050) 137-15-67',
            'status' => '0',
            'text' => 'Тестовое сообщение',
        ));
    }

    public function down()
    {
        $this->dropTable('message');
    }
}
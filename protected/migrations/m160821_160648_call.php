<?php

class m160821_160648_call extends CDbMigration
{
    public function up()
    {
        $this->createTable('call', array(
            'id' => 'pk',
            'date' => 'int(11) DEFAULT 0',
            'email' => 'varchar(255) NOT NULL',
            'name' => 'varchar(255) NOT NULL',
            'phone' => 'varchar(255) NOT NULL',
            'status' => 'tinyint(1) DEFAULT 0',
        ));

        $this->createIndex('status', 'call', 'status');

        $this->insert('call', array(
            'date' => '1471092956',
            'email' => 'igosja@ukr.net',
            'name' => 'Игорь',
            'phone' => '(050) 137-15-67',
            'status' => '0',
        ));
    }

    public function down()
    {
        $this->dropTable('call');
    }
}
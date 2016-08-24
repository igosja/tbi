<?php

class m160821_160827_country extends CDbMigration
{
    public function up()
    {
        $this->createTable('country', array(
            'id' => 'pk',
            'name' => 'varchar(255) NOT NULL',
            'status' => 'tinyint(1) DEFAULT 1',
        ));

        $this->createIndex('status', 'country', 'status');

        $this->insert('country', array(
            'name' => 'Канада',
            'status' => '1',
        ));

        $this->insert('country', array(
            'name' => 'Российская Федерация',
            'status' => '1',
        ));

        $this->insert('country', array(
            'name' => 'Соединенные Штаты Америки (США)',
            'status' => '1',
        ));

        $this->insert('country', array(
            'name' => 'Украина',
            'status' => '1',
        ));
    }

    public function down()
    {
        $this->dropTable('country');
    }
}
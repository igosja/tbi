<?php

class m160924_123553_currency extends CDbMigration
{
    public function up()
    {
        $this->createTable('currency', array(
            'id' => 'pk',
            'name' => 'varchar(255) NOT NULL',
            'rate' => 'decimal(10,2) DEFAULT 0',
            'order' => 'int(11) DEFAULT 0',
            'status' => 'int(11) DEFAULT 1',
        ));

        $this->insert('currency', array(
            'name' => 'UAH',
            'rate' => '1',
            'order' => '1',
        ));

        $this->insert('currency', array(
            'name' => 'USD',
            'rate' => '25',
            'order' => '2',
        ));

        $this->insert('currency', array(
            'name' => 'EUR',
            'rate' => '29.59',
            'order' => '3',
        ));
    }

    public function down()
    {
        $this->dropTable('currency');
    }
}
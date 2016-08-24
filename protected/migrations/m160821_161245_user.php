<?php

class m160821_161245_user extends CDbMigration
{
    public function up()
    {
        $this->createTable('user', array(
            'id' => 'pk',
            'country_id' => 'int(11) DEFAULT 0',
            'city' => 'varchar(255) NOT NULL',
            'date_register' => 'int(11) DEFAULT 0',
            'email' => 'varchar(255) NOT NULL',
            'key' => 'varchar(255) NOT NULL',
            'name' => 'varchar(255) NOT NULL',
            'password' => 'varchar(255) NOT NULL',
            'phone' => 'varchar(255) NOT NULL',
            'region_id' => 'int(11) DEFAULT 0',
            'street' => 'varchar(255) NOT NULL',
            'surname' => 'varchar(255) NOT NULL',
            'userrole_id' => 'tinyint(1) DEFAULT 0',
            'username' => 'varchar(255) NOT NULL',
            'zip' => 'varchar(10) NOT NULL',
        ));

        $this->createIndex('country_id', 'user', 'country_id');
        $this->createIndex('region_id', 'user', 'region_id');
        $this->createIndex('username', 'user', 'username');

        $this->insert('user', array(
            'country_id' => '4',
            'city' => 'Киев',
            'date_register' => '1470299136',
            'email' => 'admin@tbi.ua',
            'key' => '',
            'name' => 'Имя',
            'password' => 'd82fab8155635f8238b7e8a63531df62',
            'phone' => '(050) 111-11-11',
            'region_id' => '161',
            'street' => 'Крещатик, 1, кв. 1',
            'surname' => 'Фамилия',
            'userrole_id' => '1',
            'username' => 'admin',
            'zip' => '01001',
        ));

        $this->insert('user', array(
            'country_id' => '0',
            'city' => '',
            'date_register' => '1470299136',
            'email' => 'igosja@ukr.net',
            'key' => '',
            'name' => 'Игорь',
            'password' => '0ffa4ca76b576d4a674d96380f3f7ddc',
            'phone' => '',
            'region_id' => '0',
            'street' => '',
            'surname' => '',
            'userrole_id' => '1',
            'username' => 'igosja@ukr.net',
            'zip' => '',
        ));
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
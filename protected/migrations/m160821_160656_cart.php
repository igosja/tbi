<?php

class m160821_160656_cart extends CDbMigration
{
    public function up()
    {
        $this->createTable('cart', array(
            'id' => 'pk',
            'date' => 'int(11) DEFAULT 0',
            'session_id' => 'varchar(255) NOT NULL',
            'user_id' => 'int(11) DEFAULT 0',
        ));

        $this->createIndex('session_id', 'cart', 'session_id');
        $this->createIndex('user_id', 'cart', 'user_id');

        $this->insert('call', array(
            'date' => '1471092956',
            'email' => 'igosja@ukr.net',
            'name' => 'igosja@ukr.net',
            'phone' => '(050) 137-15-67',
            'status' => '0',
        ));
    }

    public function down()
    {
        $this->dropTable('cart');
    }
}
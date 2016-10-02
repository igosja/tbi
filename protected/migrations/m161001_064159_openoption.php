<?php

class m161001_064159_openoption extends CDbMigration
{
    public function up()
    {
        $this->createTable('openoption', array(
            'id' => 'pk',
            'image_id' => 'int(11) DEFAULT 0',
            'name' => 'varchar(255) NOT NULL',
        ));

        $this->createIndex('image_id', 'openoption', 'image_id');
    }

    public function down()
    {
        $this->dropTable('openoption');
    }
}
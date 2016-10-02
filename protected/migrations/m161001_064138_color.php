<?php

class m161001_064138_color extends CDbMigration
{
    public function up()
    {
        $this->createTable('color', array(
            'id' => 'pk',
            'image_id' => 'int(11) DEFAULT 0',
            'name' => 'varchar(255) NOT NULL',
        ));

        $this->createIndex('image_id', 'color', 'image_id');
    }

    public function down()
    {
        $this->dropTable('color');
    }
}
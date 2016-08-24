<?php

class m160821_160938_newpost extends CDbMigration
{
    public function up()
    {
        $this->createTable('newpost', array(
            'id' => 'pk',
            'key' => 'varchar(255) NOT NULL',
        ));

        $this->insert('newpost', array(
            'key' => 'e0dff7feff1125738eed6cae40890fc9',
        ));
    }

    public function down()
    {
        $this->dropTable('newpost');
    }
}
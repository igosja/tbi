<?php

class m161001_065936_productset extends CDbMigration
{
    public function up()
    {
        $this->createTable('productset', array(
            'id' => 'pk',
            'child_id' => 'int(11) DEFAULT 0',
            'parent_id' => 'int(11) DEFAULT 0',
        ));

        $this->createIndex('child_id', 'productset', 'child_id');
        $this->createIndex('parent_id', 'productset', 'parent_id');
    }

    public function down()
    {
        $this->dropTable('productset');
    }
}
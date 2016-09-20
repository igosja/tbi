<?php

class m160920_081649_review extends CDbMigration
{
    public function up()
    {
        $this->createTable('review', array(
            'id' => 'pk',
            'answer' => 'text NOT NULL',
            'answer_date' => 'int(11) DEFAULT 0',
            'ask' => 'text NOT NULL',
            'ask_date' => 'int(11) DEFAULT 0',
            'name' => 'varchar(255) NOT NULL',
            'product_id' => 'int(11) DEFAULT 0',
            'sex_id' => 'tinyint(1) DEFAULT 1',
        ));

        $this->createIndex('product_id', 'review', 'product_id');
    }

    public function down()
    {
        $this->dropTable('review');
    }
}
<?php

class m161008_070543_productpopular extends CDbMigration
{
    public function up()
    {
        $this->createTable('productpopular', array(
            'id' => 'pk',
            'product_id' => 'INT(11) DEFAULT 0',
        ));
    }

    public function down()
    {
        $this->dropTable('productpopular');
    }
}
<?php

class m160925_075823_cart extends CDbMigration
{
    public function up()
    {
        $this->dropIndex('option_id', 'cartproduct');

        $this->dropColumn('cartproduct', 'option_id');
    }

    public function down()
    {
        $this->addColumn('cartproduct', 'option_id', 'int(11) NOT NULL AFTER cart_id');

        $this->createIndex('option_id', 'cartproduct', 'option_id');
    }
}
<?php

class m160821_161202_shipping extends CDbMigration
{
    public function up()
    {
        $this->createTable('shipping', array(
            'id' => 'pk',
            'name' => 'varchar(255) NOT NULL',
            'order' => 'int(11) DEFAULT 0',
            'status' => 'tinyint(1) DEFAULT 1',
        ));

        $this->createIndex('order', 'shipping', 'order');
        $this->createIndex('status', 'shipping', 'status');

        $this->insert('shipping', array(
            'name' => 'Доставка по Киеву',
            'order' => '0',
            'status' => '1',
        ));

        $this->insert('shipping', array(
            'name' => 'Доставка по Украине <span>(Новая почта)</span>',
            'order' => '1',
            'status' => '1',
        ));

        $this->insert('shipping', array(
            'name' => 'Самовывоз <span>(Киев)</span>',
            'order' => '2',
            'status' => '1',
        ));
    }

    public function down()
    {
        $this->dropTable('shipping');
    }
}
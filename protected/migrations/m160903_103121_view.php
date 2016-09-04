<?php

class m160903_103121_view extends CDbMigration
{
    public function up()
    {
        $this->createTable('view', array(
            'id' => 'pk',
            'name' => 'varchar(255) NOT NULL',
            'view' => 'varchar(255) NOT NULL',
        ));

        $this->insert('view', array('name' => 'Инструмент', 'view' => 'tool'));
        $this->insert('view', array('name' => 'Карниз', 'view' => 'cornice'));
        $this->insert('view', array('name' => 'Комплект', 'view' => 'set'));
        $this->insert('view', array('name' => 'Краска', 'view' => 'paint'));
        $this->insert('view', array('name' => 'Сертификат', 'view' => 'certificate'));
        $this->insert('view', array('name' => 'Эффект', 'view' => 'effect'));

        $this->addColumn('product', 'view_id', 'tinyint(1) DEFAULT 0 AFTER url');

        $this->createIndex('view_id', 'product', 'view_id');
    }

    public function down()
    {
        $this->dropTable('view');

        $this->dropIndex('view_id', 'product');

        $this->dropColumn('product', 'view_id');
    }
}
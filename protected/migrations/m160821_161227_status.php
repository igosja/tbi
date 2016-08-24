<?php

class m160821_161227_status extends CDbMigration
{
    public function up()
    {
        $this->createTable('status', array(
            'id' => 'pk',
            'name' => 'varchar(255) NOT NULL',
        ));

        $this->insert('status', array(
            'name' => 'Новый',
        ));

        $this->insert('status', array(
            'name' => 'Подтвержден',
        ));

        $this->insert('status', array(
            'name' => 'Оплачен',
        ));

        $this->insert('status', array(
            'name' => 'Отправлен',
        ));

        $this->insert('status', array(
            'name' => 'Выполнен',
        ));

        $this->insert('status', array(
            'name' => 'Возврат',
        ));
    }

    public function down()
    {
        $this->dropTable('status');
    }
}
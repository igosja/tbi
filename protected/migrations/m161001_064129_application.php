<?php

class m161001_064129_application extends CDbMigration
{
    public function up()
    {
        $this->createTable('application', array(
            'id' => 'pk',
            'name' => 'varchar(255) NOT NULL',
            'order' => 'int(11) DEFAULT 0',
            'status' => 'int(11) DEFAULT 1',
        ));

        $this->createIndex('order', 'application', 'order');
        $this->createIndex('status', 'application', 'status');

        $this->insert('application', array(
            'name' => 'Оконные',
            'order' => '1',
        ));

        $this->insert('application', array(
            'name' => 'Разделитель',
            'order' => '2',
        ));

        $this->insert('application', array(
            'name' => 'Офис',
            'order' => '3',
        ));

        $this->insert('application', array(
            'name' => 'Конференц-зал',
            'order' => '4',
        ));

        $this->insert('application', array(
            'name' => 'Солнцезащитные',
            'order' => '5',
        ));

        $this->insert('application', array(
            'name' => 'Для дома',
            'order' => '6',
        ));

        $this->insert('application', array(
            'name' => 'Отель',
            'order' => '7',
        ));

        $this->insert('application', array(
            'name' => 'Крепление картин',
            'order' => '8',
        ));

        $this->insert('application', array(
            'name' => 'Ванные',
            'order' => '9',
        ));

        $this->insert('application', array(
            'name' => 'Корабли',
            'order' => '10',
        ));

        $this->insert('application', array(
            'name' => 'Автобус, фургон',
            'order' => '11',
        ));

        $this->insert('application', array(
            'name' => 'Угол 90 градусов',
            'order' => '12',
        ));

        $this->insert('application', array(
            'name' => 'Большой угол изгиба',
            'order' => '13',
        ));

        $this->insert('application', array(
            'name' => 'Арка',
            'order' => '14',
        ));
    }

    public function down()
    {
        $this->dropTable('application');
    }
}
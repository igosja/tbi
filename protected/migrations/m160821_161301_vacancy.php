<?php

class m160821_161301_vacancy extends CDbMigration
{
    public function up()
    {
        $this->createTable('vacancy', array(
            'id' => 'pk',
            'city' => 'int(11) DEFAULT 0',
            'conditions' => 'text NOT NULL',
            'order' => 'int(11) DEFAULT 0',
            'position' => 'varchar(255) NOT NULL',
            'requirements' => 'text NOT NULL',
            'salary' => 'int(11) DEFAULT 0',
            'status' => 'tinyint(1) DEFAULT 1',
        ));

        $this->createIndex('order', 'vacancy', 'order');
        $this->createIndex('status', 'vacancy', 'status');

        $this->insert('vacancy', array(
            'city' => 'Киев',
            'conditions' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>',
            'order' => '0',
            'position' => 'Секретарь',
            'requirements' => '<p>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan.</p>',
            'salary' => '4500',
            'status' => '1',
        ));

        $this->insert('vacancy', array(
            'city' => 'Киев',
            'conditions' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>',
            'order' => '1',
            'position' => 'Продавец',
            'requirements' => '<p>Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan.</p>',
            'salary' => '4500',
            'status' => '1',
        ));
    }

    public function down()
    {
        $this->dropTable('vacancy');
    }
}
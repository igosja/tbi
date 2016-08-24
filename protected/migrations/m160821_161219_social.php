<?php

class m160821_161219_social extends CDbMigration
{
    public function up()
    {
        $this->createTable('social', array(
            'id' => 'pk',
            'class' => 'varchar(255) NOT NULL',
            'name' => 'varchar(255) NOT NULL',
            'order' => 'int(11) DEFAULT 0',
            'status' => 'tinyint(1) DEFAULT 1',
            'web' => 'varchar(255) NOT NULL',
        ));

        $this->createIndex('order', 'social', 'order');
        $this->createIndex('status', 'social', 'status');

        $this->insert('social', array(
            'class' => 'fb',
            'name' => 'Facebook',
            'order' => '0',
            'status' => '1',
            'web' => 'https://www.facebook.com/tbi.ua',
        ));

        $this->insert('social', array(
            'class' => 'in',
            'name' => 'Instagram',
            'order' => '5',
            'status' => '1',
            'web' => 'https://www.instagram.com/tbicompany',
        ));

        $this->insert('social', array(
            'class' => 'pi',
            'name' => 'Pinterest',
            'order' => '4',
            'status' => '1',
            'web' => 'https://ru.pinterest.com/tbicompany',
        ));

        $this->insert('social', array(
            'class' => 'yo',
            'name' => 'YouTube',
            'order' => '3',
            'status' => '1',
            'web' => 'https://www.youtube.com/user/tbicompany',
        ));

        $this->insert('social', array(
            'class' => 'gp',
            'name' => 'Google+',
            'order' => '2',
            'status' => '0',
            'web' => 'https://plus.google.com',
        ));

        $this->insert('social', array(
            'class' => 'tw',
            'name' => 'Twitter',
            'order' => '1',
            'status' => '1',
            'web' => 'https://twitter.com/TbiWww',
        ));
    }

    public function down()
    {
        $this->dropTable('social');
    }
}
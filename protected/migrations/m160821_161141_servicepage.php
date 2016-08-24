<?php

class m160821_161141_servicepage extends CDbMigration
{
    public function up()
    {
        $this->createTable('servicepage', array(
            'id' => 'pk',
            'image_id' => 'int(11) DEFAULT 0',
            'name' => 'varchar(255) NOT NULL',
            'text' => 'text NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->createIndex('image_id', 'servicepage', 'image_id');

        $this->insert('servicepage', array(
            'image_id' => '16',
            'name' => 'Декорирование помещений',
            'text' => '<p>Тест Тестdolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
<p>Тест тестdolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
<p>Тест тест, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. </p>',
            'seo_description' => 'Услуги',
            'seo_keywords' => 'Услуги',
            'seo_title' => 'Услуги',
        ));
    }

    public function down()
    {
        $this->dropTable('servicepage');
    }
}
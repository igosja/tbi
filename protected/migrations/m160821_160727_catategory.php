<?php

class m160821_160727_catategory extends CDbMigration
{
    public function up()
    {
        $this->createTable('category', array(
            'id' => 'pk',
            'image_id' => 'int(11) DEFAULT 0',
            'name' => 'varchar(255) NOT NULL',
            'order' => 'int(11) DEFAULT 0',
            'status' => 'tinyint(1) DEFAULT 1',
            'text' => 'text NOT NULL',
            'url' => 'varchar(255) NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->createIndex('image_id', 'category', 'image_id');
        $this->createIndex('order', 'category', 'order');
        $this->createIndex('status', 'category', 'status');
        $this->createIndex('url', 'category', 'url');

        $this->insert('category', array(
            'image_id' => '19',
            'name' => 'Декоративные материалы',
            'order' => '0',
            'status' => '1',
            'text' => 'Декоративные материалы',
            'url' => '1-dekorativnye_materialy',
            'seo_description' => 'Декоративные материалы',
            'seo_keywords' => 'Декоративные материалы',
            'seo_title' => 'Декоративные материалы',
        ));

        $this->insert('category', array(
            'image_id' => '20',
            'name' => 'Карнизы',
            'order' => '1',
            'status' => '1',
            'text' => 'Карнизы',
            'url' => '2-karnizy',
            'seo_description' => 'Карнизы',
            'seo_keywords' => 'Карнизы',
            'seo_title' => 'Карнизы',
        ));

        $this->insert('category', array(
            'image_id' => '21',
            'name' => 'Ткани',
            'order' => '2',
            'status' => '1',
            'text' => 'Ткани',
            'url' => '3-tkani',
            'seo_description' => 'Ткани',
            'seo_keywords' => 'Ткани',
            'seo_title' => 'Ткани',
        ));

        $this->insert('category', array(
            'image_id' => '22',
            'name' => 'Обои',
            'order' => '3',
            'status' => '1',
            'text' => 'Обои',
            'url' => '4-oboi',
            'seo_description' => 'Обои',
            'seo_keywords' => 'Обои',
            'seo_title' => 'Обои',
        ));

        $this->insert('category', array(
            'image_id' => '23',
            'name' => 'Другое',
            'order' => '4',
            'status' => '1',
            'text' => 'Другое',
            'url' => '5-drugoe',
            'seo_description' => 'Другое',
            'seo_keywords' => 'Другое',
            'seo_title' => 'Другое',
        ));
    }

    public function down()
    {
        $this->dropTable('category');
    }
}
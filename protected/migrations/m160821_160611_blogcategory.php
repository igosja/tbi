<?php

class m160821_160611_blogcategory extends CDbMigration
{
    public function up()
    {
        $this->createTable('blogcategory', array(
            'id' => 'pk',
            'name' => 'varchar(255) NOT NULL',
            'order' => 'int(11)  DEFAULT 0',
            'status' => 'tinyint(1)  DEFAULT 1',
            'url' => 'varchar(255) NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->createIndex('order', 'blogcategory', 'order');
        $this->createIndex('status', 'blogcategory', 'status');
        $this->createIndex('url', 'blogcategory', 'url');

        $this->insert('blogcategory', array(
            'name' => 'Ткани и шторы',
            'order' => '0',
            'status' => '1',
            'url' => 'tkani_i_shtory',
            'seo_description' => 'Ткани и шторы',
            'seo_keywords' => 'Ткани и шторы',
            'seo_title' => 'Ткани и шторы',
        ));

        $this->insert('blogcategory', array(
            'name' => 'Карнизы и солнцезащитные системы',
            'order' => '1',
            'status' => '1',
            'url' => 'karnizy_i_solncezaschitnye_sistemy',
            'seo_description' => 'Карнизы и солнцезащитные системы',
            'seo_keywords' => 'Карнизы и солнцезащитные системы',
            'seo_title' => 'Карнизы и солнцезащитные системы',
        ));

        $this->insert('blogcategory', array(
            'name' => 'Акции и новости',
            'order' => '2',
            'status' => '1',
            'url' => 'akcii_i_novosti',
            'seo_description' => 'Акции и новости',
            'seo_keywords' => 'Акции и новости',
            'seo_title' => 'Акции и новости',
        ));

        $this->insert('blogcategory', array(
            'name' => 'Краски, штукатурки и декоры',
            'order' => '3',
            'status' => '1',
            'url' => 'kraski_shtukaturki_i_dekory',
            'seo_description' => 'Краски, штукатурки и декоры',
            'seo_keywords' => 'Краски, штукатурки и декоры',
            'seo_title' => 'Краски, штукатурки и декоры',
        ));

        $this->insert('blogcategory', array(
            'name' => 'Прикольные шторы',
            'order' => '4',
            'status' => '1',
            'url' => 'prikolynye_shtory',
            'seo_description' => 'Прикольные шторы',
            'seo_keywords' => 'Прикольные шторы',
            'seo_title' => 'Прикольные шторы',
        ));
    }

    public function down()
    {
        $this->dropTable('blogcategory');
    }
}
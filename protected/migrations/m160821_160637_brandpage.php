<?php

class m160821_160637_brandpage extends CDbMigration
{
    public function up()
    {
        $this->createTable('brandpage', array(
            'id' => 'pk',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('brandpage', array(
            'seo_description' => 'Бренды',
            'seo_keywords' => 'Бренды',
            'seo_title' => 'Бренды',
        ));
    }

    public function down()
    {
        $this->dropTable('brandpage');
    }
}
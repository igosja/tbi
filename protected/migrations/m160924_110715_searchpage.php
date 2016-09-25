<?php

class m160924_110715_searchpage extends CDbMigration
{
    public function up()
    {
        $this->createTable('searchpage', array(
            'id' => 'pk',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('searchpage', array(
            'seo_description' => 'Поиск',
            'seo_keywords' => 'Поиск',
            'seo_title' => 'Поиск',
        ));
    }

    public function down()
    {
        $this->dropTable('searchpage');
    }
}
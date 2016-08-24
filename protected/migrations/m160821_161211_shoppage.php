<?php

class m160821_161211_shoppage extends CDbMigration
{
    public function up()
    {
        $this->createTable('shoppage', array(
            'id' => 'pk',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('shoppage', array(
            'seo_description' => 'Магазин',
            'seo_keywords' => 'Магазин',
            'seo_title' => 'Магазин',
        ));
    }

    public function down()
    {
        $this->dropTable('shoppage');
    }
}
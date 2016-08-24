<?php

class m160821_160905_faqpage extends CDbMigration
{
    public function up()
    {
        $this->createTable('faqpage', array(
            'id' => 'pk',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('faqpage', array(
            'seo_description' => 'ЧаВо',
            'seo_keywords' => 'ЧаВо',
            'seo_title' => 'ЧаВо',
        ));
    }

    public function down()
    {
        $this->dropTable('faqpage');
    }
}
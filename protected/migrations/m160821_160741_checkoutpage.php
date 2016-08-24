<?php

class m160821_160741_checkoutpage extends CDbMigration
{
    public function up()
    {
        $this->createTable('checkoutpage', array(
            'id' => 'pk',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('checkoutpage', array(
            'seo_description' => 'Оформление заказа',
            'seo_keywords' => 'Оформление заказа',
            'seo_title' => 'Оформление заказа',
        ));
    }

    public function down()
    {
        $this->dropTable('checkoutpage');
    }
}
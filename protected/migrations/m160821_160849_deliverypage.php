<?php

class m160821_160849_deliverypage extends CDbMigration
{
    public function up()
    {
        $this->createTable('deliverypage', array(
            'id' => 'pk',
            'image_id' => 'int(11) DEFAULT 0',
            'text' => 'text NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->createIndex('image_id', 'deliverypage', 'image_id');

        $this->insert('deliverypage', array(
            'image_id' => '18',
            'text' => 'Обращаем ваше внимание, оплата с помощью наложенного платежа требует дополнительных затрат: комиссия в размере 20 грн + 2% от суммы перевода.',
            'seo_description' => 'Доставка',
            'seo_keywords' => 'Доставка',
            'seo_title' => 'Доставка',
        ));
    }

    public function down()
    {
        $this->dropTable('deliverypage');
    }
}
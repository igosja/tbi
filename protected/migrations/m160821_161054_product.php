<?php

class m160821_161054_product extends CDbMigration
{
    public function up()
    {
        $this->createTable('product', array(
            'id' => 'pk',
            'category_id' => 'int(11) DEFAULT 0',
            'name' => 'varchar(255) NOT NULL',
            'order' => 'int(11) DEFAULT 0',
            'price' => 'decimal(10.2) DEFAULT 0',
            'sku' => 'varchar(255) NOT NULL',
            'status' => 'tinyint(1) DEFAULT 1',
            'text' => 'text NOT NULL',
            'url' => 'varchar(255) NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->createIndex('category_id', 'product', 'category_id');
        $this->createIndex('order', 'product', 'order');
        $this->createIndex('status', 'product', 'status');
        $this->createIndex('url', 'product', 'url');

        $this->insert('product', array(
            'category_id' => '5',
            'name' => 'Тестовый товар',
            'order' => '0',
            'price' => '123.45',
            'sku' => '565ф',
            'status' => '1',
            'text' => 'Тестовое описание тестового товара',
            'url' => '1-testovyy_tovar',
            'seo_description' => 'Тестовый товар',
            'seo_keywords' => 'Тестовый товар',
            'seo_title' => 'Тестовый товар',
        ));

        $this->insert('product', array(
            'category_id' => '5',
            'name' => 'Тестовый товар 2',
            'order' => '1',
            'price' => '10.27',
            'sku' => 'qwer456',
            'status' => '1',
            'text' => 'Тестовый товар 2 описание товара',
            'url' => '2-testovyy_tovar_2',
            'seo_description' => 'Тестовый товар 2',
            'seo_keywords' => 'Тестовый товар 2',
            'seo_title' => 'Тестовый товар 2',
        ));
    }

    public function down()
    {
        $this->dropTable('product');
    }
}
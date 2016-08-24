<?php

class m160821_161035_paymentpage extends CDbMigration
{
    public function up()
    {
        $this->createTable('paymentpage', array(
            'id' => 'pk',
            'card_name' => 'varchar(255) NOT NULL',
            'card_text' => 'text NOT NULL',
            'cash_name' => 'varchar(255) NOT NULL',
            'cash_text' => 'text NOT NULL',
            'receipt_name' => 'varchar(255) NOT NULL',
            'receipt_text' => 'text NOT NULL',
            'text' => 'text NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('paymentpage', array(
            'card_name' => 'Оплата банковскрй картой<br>на сайте (LiqPay)',
            'card_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.',
            'cash_name' => 'Оплата наличными<br>при получении товара',
            'cash_text' => 'Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.',
            'receipt_name' => 'Безналичный расчет<br>(счет-фактура)',
            'receipt_text' => 'Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.',
            'seo_description' => 'Outlet',
            'seo_keywords' => 'Outlet',
            'seo_title' => 'Outlet',
        ));
    }

    public function down()
    {
        $this->dropTable('paymentpage');
    }
}
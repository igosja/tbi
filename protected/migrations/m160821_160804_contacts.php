<?php

class m160821_160804_contacts extends CDbMigration
{
    public function up()
    {
        $this->createTable('contacts', array(
            'id' => 'pk',
            'office_address' => 'varchar(255) NOT NULL',
            'office_email' => 'varchar(255) NOT NULL',
            'office_lat' => 'varchar(255) NOT NULL',
            'office_lng' => 'varchar(255) NOT NULL',
            'office_name' => 'varchar(255) NOT NULL',
            'office_phone' => 'varchar(255) NOT NULL',
            'salon_address' => 'varchar(255) NOT NULL',
            'salon_email' => 'varchar(255) NOT NULL',
            'salon_lat' => 'varchar(255) NOT NULL',
            'salon_lng' => 'varchar(255) NOT NULL',
            'salon_name' => 'varchar(255) NOT NULL',
            'salon_phone' => 'varchar(255) NOT NULL',
            'text' => 'text NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('contacts', array(
            'office_address' => '01054, г.Киев,;ул. Гоголевская, 23',
            'office_email' => 'info@tbi.ua',
            'office_lat' => '50.451502',
            'office_lng' => '30.494894',
            'office_name' => 'Фирма "ТБИ"',
            'office_phone' => '(044) 482-01-01;(044) 482-36-46;(044) 482-36-47;(044) 482-04-91',
            'salon_address' => '01054, г.Киев,;ул. Гоголевская, 15',
            'salon_email' => 'info@tbi.ua',
            'salon_lat' => '50.450755',
            'salon_lng' => '30.495665',
            'salon_name' => 'Салон "VOGUE INTERIORS"',
            'salon_phone' => '(044) 482-01-01;(044) 482-36-46;(044) 482-36-47;(044) 482-04-91',
            'text' => 'Мы будем рады предоставить Вам подробную консультацию по предлагаемой продукции, провести презентацию материалов, обучающий или ознакомительный семинар, внедрить дисконтную и бонусную программы, а также предоставить наиболее удобный формат сотрудничества для длительной и плодотворной кооперации.',
            'seo_description' => 'Контакты',
            'seo_keywords' => 'Контакты',
            'seo_title' => 'Контакты',
        ));
    }

    public function down()
    {
        $this->dropTable('contacts');
    }
}
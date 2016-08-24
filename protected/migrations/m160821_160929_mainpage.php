<?php

class m160821_160929_mainpage extends CDbMigration
{
    public function up()
    {
        $this->createTable('mainpage', array(
            'id' => 'pk',
            'text_left' => 'text NOT NULL',
            'text_right' => 'text NOT NULL',
            'text_title' => 'varchar(255) NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('mainpage', array(
            'text_left' => '<p>Фирма «ТБИ» была основана в 1992 году и вот уже более 20 лет лет успешно работает на рынке Украины, зарекомендовав себя, как надёжный партнёр с комплексным подходом к высококлассному <a href="http://www.tbi.ua/shop/category/dekorativnye-materialy/" target="_blank">декору интерьеров и экстерьеров</a>, декору окон и <a href="http://www.tbi.ua/shop/category/karnizy-i-solntsezashchitnye-sistemy/" target="_blank">профессиональной солнцезащите</a> частных и общественных объектов, работая непосредственно с Заказчиками, а также сотрудничая, как с архитекторами и дизайнерами, так и со строительными и подрядными организациями.<br> Фирма "ТБИ" является эксклюзивным представителем декоративных материалов <a href="http://www.tbi.ua/shop/category/brendy/giorgio-graesan--friends/" target="_blank">Giorgio Graesan &amp;Friends</a> (Италия) и <a href="http://www.tbi.ua/shop/category/brendy/novacolor/" target="_blank">NOVACOLOR</a> (Италия), а также является официальным представителем компании</p>',
            'text_right' => '<p><a href="http://www.tbi.ua/shop/category/brendy/mottura/" target="_blank">MOTTURA</a>  специализирующейся на профессиональной солнцезащите и карнизных системах для декора окон. Помимо дистрибуции и проектной деятельности, Компания "ТБИ" также работает с конечными потребителями на основе интерьер-бутика "VOGUE INTERIORS", находящегося в Киеве, а также запускает интернет-магазин с помощью которого можно купить декоративные материалы, карнизы, рулонные шторы, деревянные жалюзи, а также ткани и даже заказать пошив онлайн с доставкой по всей Украине и не только. </p>',
            'text_title' => 'О компании ТБИ',
            'seo_description' => 'Доставка',
            'seo_keywords' => 'Доставка',
            'seo_title' => 'Доставка',
        ));
    }

    public function down()
    {
        $this->dropTable('mainpage');
    }
}
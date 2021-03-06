<?php

class m160821_160857_faq extends CDbMigration
{
    public function up()
    {
        $this->createTable('faq', array(
            'id' => 'pk',
            'answer' => 'text NOT NULL',
            'order' => 'int(11) DEFAULT 0',
            'question' => 'varchar(255) NOT NULL',
            'status' => 'tinyint(1) DEFAULT 1',
        ));

        $this->createIndex('order', 'faq', 'order');
        $this->createIndex('status', 'faq', 'status');

        $this->insert('faq', array(
            'answer' => '<p>Рады сообщить, что отныне продукция итальянского производителя декоративных материалов GIORGIO GRAESAN &amp; FRIENDS представлена и в интернет-магазине нашего сайта.</p>
<p>Вы наверное знаете, что декоративные материалы GIORGIO GRAESAN &amp; FRIENDS от недавнего времени можно приобрести не только у официального представителя – Фирмы «ТБИ», но и online, через сайт www.giorgiograesan.ua , где Вы сможете не только выбрать материалы, но и заказать работы по нанесению отделки.</p>',
            'order' => '0',
            'question' => 'Задайте свой вопрос менеджеру',
            'status' => '1',
        ));

        $this->insert('faq', array(
            'answer' => '<p>Рады сообщить, что отныне продукция итальянского производителя декоративных материалов GIORGIO GRAESAN &amp; FRIENDS представлена и в интернет-магазине нашего сайта.</p>
<p>Вы наверное знаете, что декоративные материалы GIORGIO GRAESAN &amp; FRIENDS от недавнего времени можно приобрести не только у официального представителя – Фирмы «ТБИ», но и online, через сайт www.giorgiograesan.ua , где Вы сможете не только выбрать материалы, но и заказать работы по нанесению отделки.</p>',
            'order' => '5',
            'question' => 'Часто задаваемые вопросы об оплате и доставке',
            'status' => '1',
        ));

        $this->insert('faq', array(
            'answer' => '<p>Сделайте подарок, наполненный стилем  - подарочный сертификат от  www.tbi.ua. Это идеальный подарок для ценителей роскошных и комфортных интерьеров. Вы можете выбрать подходящий номинал сертификата, который будет являться предварительным платежом, который дает возможность приобрести товары или услуги в интернет-магазине tbi.ua, на сумму, эквивалентную его номиналу.</p>',
            'order' => '1',
            'question' => 'Часто задаваемые вопросы о www.tbi.ua',
            'status' => '1',
        ));

        $this->insert('faq', array(
            'answer' => '<p>Рады сообщить, что отныне продукция итальянского производителя декоративных материалов GIORGIO GRAESAN &amp; FRIENDS представлена и в интернет-магазине нашего сайта.</p>
<p>Вы наверное знаете, что декоративные материалы GIORGIO GRAESAN &amp; FRIENDS от недавнего времени можно приобрести не только у официального представителя – Фирмы «ТБИ», но и online, через сайт www.giorgiograesan.ua , где Вы сможете не только выбрать материалы, но и заказать работы по нанесению отделки.</p>',
            'order' => '3',
            'question' => 'Часто задаваемые вопросы о продукции NOVACOLOR и  Giorgio Graesan & Friends',
            'status' => '1',
        ));

        $this->insert('faq', array(
            'answer' => '<p>Рады сообщить, что отныне продукция итальянского производителя декоративных материалов GIORGIO GRAESAN &amp; FRIENDS представлена и в интернет-магазине нашего сайта.</p>
<p>Вы наверное знаете, что декоративные материалы GIORGIO GRAESAN &amp; FRIENDS от недавнего времени можно приобрести не только у официального представителя – Фирмы «ТБИ», но и online, через сайт www.giorgiograesan.ua , где Вы сможете не только выбрать материалы, но и заказать работы по нанесению отделки.</p>',
            'order' => '2',
            'question' => 'Часто задаваемые вопросы о продукции MOTTURA',
            'status' => '1',
        ));

        $this->insert('faq', array(
            'answer' => '<p>Рады сообщить, что отныне продукция итальянского производителя декоративных материалов GIORGIO GRAESAN &amp; FRIENDS представлена и в интернет-магазине нашего сайта.</p>
<p>Вы наверное знаете, что декоративные материалы GIORGIO GRAESAN &amp; FRIENDS от недавнего времени можно приобрести не только у официального представителя – Фирмы «ТБИ», но и online, через сайт www.giorgiograesan.ua , где Вы сможете не только выбрать материалы, но и заказать работы по нанесению отделки.</p>',
            'order' => '4',
            'question' => 'Часто задаваемые вопросы о тканях',
            'status' => '1',
        ));
    }

    public function down()
    {
        $this->dropTable('faq');
    }
}
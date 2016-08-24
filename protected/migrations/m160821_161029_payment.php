<?php

class m160821_161029_payment extends CDbMigration
{
    public function up()
    {
        $this->createTable('payment', array(
            'id' => 'pk',
            'name' => 'varchar(255) NOT NULL',
            'order' => 'int(11) DEFAULT 0',
            'status' => 'tinyint(1) DEFAULT 1',
            'text' => 'text NOT NULL',
        ));

        $this->createIndex('order', 'payment', 'order');
        $this->createIndex('status', 'payment', 'status');

        $this->insert('payment', array(
            'name' => 'НАЛИЧНЫМИ ПРИ ПОЛУЧЕНИИ ТОВАРА',
            'order' => '0',
            'status' => '1',
            'text' => 'БЕЗНАЛИЧНАЯ ОПЛАТА (СЧЕТ-ФАКТУРА)',
        ));

        $this->insert('payment', array(
            'name' => 'ПЛАСТИКОВОЙ КАРТОЙ НА САЙТЕ LIQPAY',
            'order' => '1',
            'status' => '1',
            'text' => 'Самый удобный и быстрый способ оплаты, подтверждение в течении нескольких минут.',
        ));

        $this->insert('payment', array(
            'name' => 'БЕЗНАЛИЧНАЯ ОПЛАТА (СЧЕТ-ФАКТУРА)',
            'order' => '2',
            'status' => '1',
            'text' => 'Счет может быть оплачен в кассе любого банка, а подтверждение об оплате мы получим в течении двух рабочих дней. Заказ будет отправлен после поступления денег на счет. Банк можем взымать комиссию за перевод согласно своих внутренних тарифов.',
        ));
    }

    public function down()
    {
        $this->dropTable('payment');
    }
}
<?php

class m160821_160718_catalogpage extends CDbMigration
{
    public function up()
    {
        $this->createTable('catalogpage', array(
            'id' => 'pk',
            'text' => 'text NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('catalogpage', array(
            'text' => 'Значимость этих проблем настолько очевидна, что постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение новых предложений. Товарищи! укрепление и развитие структуры требуют от нас анализа дальнейших направлений развития. Повседневная практика показывает, что сложившаяся структура организации в значительной степени обуславливает создание систем массового участия. Идейные соображения высшего порядка, а также консультация с широким активом требуют определения и уточнения направлений прогрессивного развития.',
            'seo_description' => 'Каталоги',
            'seo_keywords' => 'Каталоги',
            'seo_title' => 'Каталоги',
        ));
    }

    public function down()
    {
        $this->dropTable('catalogpage');
    }
}
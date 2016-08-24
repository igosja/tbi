<?php

class m160821_161319_warantypage extends CDbMigration
{
    public function up()
    {
        $this->createTable('warrantypage', array(
            'id' => 'pk',
            'text' => 'text NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('warrantypage', array(
            'text' => 'Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности позволяет оценить значение модели развития. Значимость этих проблем настолько очевидна, что консультация с широким активом в значительной степени обуславливает создание позиций, занимаемых участниками в отношении поставленных задач. Не следует, однако забывать, что начало повседневной работы по формированию позиции представляет собой интересный эксперимент проверки форм развития.',
            'seo_description' => 'Гарантии',
            'seo_keywords' => 'Гарантии',
            'seo_title' => 'Гарантии',
        ));
    }

    public function down()
    {
        $this->dropTable('warrantypage');
    }
}
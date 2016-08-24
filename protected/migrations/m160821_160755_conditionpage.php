<?php

class m160821_160755_conditionpage extends CDbMigration
{
    public function up()
    {
        $this->createTable('conditionpage', array(
            'id' => 'pk',
            'text' => 'text NOT NULL',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('conditionpage', array(
            'text' => 'Таким образом сложившаяся структура организации в значительной степени обуславливает создание форм развития. Задача организации, в особенности же сложившаяся структура организации позволяет оценить значение новых предложений.',
            'seo_description' => 'Условия использования',
            'seo_keywords' => 'Условия использования',
            'seo_title' => 'Условия использования',
        ));
    }

    public function down()
    {
        $this->dropTable('conditionpage');
    }
}
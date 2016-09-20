<?php

class m160920_131022_category extends CDbMigration
{
    public function up()
    {
        $this->insert('category', array(
            'image_id' => '0',
            'name' => 'Сертификаты',
            'order' => '0',
            'status' => '0',
            'text' => 'Сертификаты',
            'url' => '3-certificate',
            'seo_description' => 'Сертификаты',
            'seo_keywords' => 'Сертификаты',
            'seo_title' => 'Сертификаты',
        ));
    }

    public function down()
    {
        echo "m160920_131022_category does not support migration down.\n";
        return false;
    }
}
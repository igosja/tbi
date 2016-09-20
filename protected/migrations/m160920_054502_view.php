<?php

class m160920_054502_view extends CDbMigration
{
    public function up()
    {
        $this->insert('view', array('name' => 'Ткани', 'view' => 'textile'));
        $this->insert('view', array('name' => 'Обои', 'view' => 'wallpaper'));
    }

    public function down()
    {
        return false;
    }
}
<?php

class m160821_160551_accountpage extends CDbMigration
{
	public function up()
	{
        $this->createTable('accountpage', array(
            'id' => 'pk',
            'seo_description' => 'text NOT NULL',
            'seo_keywords' => 'text NOT NULL',
            'seo_title' => 'varchar(255) NOT NULL',
        ));

        $this->insert('accountpage', array(
            'seo_description' => 'Личный кабинет',
            'seo_keywords' => 'Личный кабинет',
            'seo_title' => 'Личный кабинет',
        ));
	}

	public function down()
	{
		$this->dropTable('accountpage');
	}
}
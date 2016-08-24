<?php

class m160821_161131_resume extends CDbMigration
{
    public function up()
    {
        $this->createTable('resume', array(
            'id' => 'pk',
            'email' => 'varchar(255) NOT NULL',
            'date' => 'int(11) DEFAULT 0',
            'file' => 'varchar(255) NOT NULL',
            'name' => 'varchar(255) NOT NULL',
            'phone' => 'varchar(255) NOT NULL',
            'position' => 'varchar(255) NOT NULL',
            'status' => 'tinyint(1) DEFAULT 1',
            'text' => 'text NOT NULL',
        ));

        $this->createIndex('status', 'resume', 'status');

        $this->insert('resume', array(
            'email' => 'igosja@ukr.net',
            'date' => '1471103949',
            'file' => '/uploads/2d0/486/ae1/5cabdde17157ddfea64a.docx',
            'name' => 'Игорь',
            'phone' => '(050) 137-15-67',
            'position' => 'Секретарь',
            'status' => '0',
            'text' => 'Тестовое письмо',
        ));
    }

    public function down()
    {
        $this->dropTable('resume');
    }
}
<?php

class m161009_104508_orderstatus extends CDbMigration
{
    public function up()
    {
        $this->renameColumn('orderstatus', 'status_id', 'status');
        $this->alterColumn('orderstatus', 'status', 'VARCHAR(255)');
    }

    public function down()
    {
        $this->renameColumn('orderstatus', 'status', 'status_id');
    }
}
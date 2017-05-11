<?php

use yii\db\Migration;

class m170425_142553_image extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if($this->db->driverName === 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%image}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'path' => $this->string(255)->notNull(),
            'create_at' => $this->integer(),
            'create_by' => $this->integer(),
            'update_at' => $this->integer(),
            'update_by' => $this->integer(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%images}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

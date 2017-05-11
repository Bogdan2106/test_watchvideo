<?php

use yii\db\Migration;

class m170427_214257_section extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql'){
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('section', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'slug' => $this->string()->notNull()->unique(),
            'status' => $this->integer(),
            'image_id' => $this->integer(),
            'create_at' => $this->integer(),
            'create_by' => $this->integer(),
            'update_at' => $this->integer(),
            'update_by' => $this->integer(),
        ], $tableOptions);

    }

    public function down()
    {
        $this->dropTable('section');
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

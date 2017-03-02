<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->createTable('{{%news}}', [
            'id' => $this->primaryKey(),
            'date_create' => $this->timestamp()->notNull(),
            'date_published' => $this->date()->defaultValue(NULL),
            'date_update' => $this->timestamp()->notNull(),
            'title' => $this->string(200)->notNull(),
            'alias' => $this->string(200)->notNull()->unique(),
            'preview' => $this->string(1000)->defaultValue(NULL),
            'text' => $this->text()->defaultValue(NULL),
            'active' => $this->smallInteger()->defaultValue(0),
        ], $tableOptions);
        
        $this->createTable('{{%messages}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'body' => $this->string(1000)->notNull(),
            'date' => $this->timestamp(),
        ], $tableOptions);
        
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'body' => $this->text()->notNull(),
            'date' => $this->timestamp(),
            'active' => $this->smallInteger()->defaultValue(0),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
        $this->dropTable('{{%news}}');
        $this->dropTable('{{%messages}}');
        $this->dropTable('{{%comments}}');
    }
}

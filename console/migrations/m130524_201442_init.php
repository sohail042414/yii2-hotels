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

        $this->createAdmin();
        
    }

    /**
     * 
     */
    private function createAdmin() {

        //password : developer123
        $this->insert('{{%user}}', [
            'username' => 'admin',
            'auth_key' => 'sMCCWHi28a9KvjSaA04qFXoWWgo46lwP',
            'password_hash' => '$2y$13$bjc5x/Nclng/uGazUbzfheXCQFByBR2XdtL6bDBJ0ZohVPlY4KOKW',
            'password_reset_token' => NULL,
            'email' => 'admin@gmail.com',
            'status' => 10,
            'created_at' => 1493585108,
            'updated_at' => 1493585108,
        ]);

    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}

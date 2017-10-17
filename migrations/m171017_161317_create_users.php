<?php

use yii\db\Migration;

class m171017_161317_create_users extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m171017_161317_create_users cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'authKey' => $this->string(32)->notNull(),
            'password' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'accessToken' => $this->string(22)->notNull(),
        ]);
    }

    public function down()
    {
        //echo "m171017_161317_create_users cannot be reverted.\n";

        //return false;
        $this->dropTable('users');
    }
    
}

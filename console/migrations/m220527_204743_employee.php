<?php

use yii\db\Migration;

/**
 * Class m220527_204743_employee
 */
class m220527_204743_employee extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220527_204743_employee cannot be reverted.\n";

        return false;
    }

    //Use up()/down() to run migration code without a transaction.
    public function up()
    {
         $this->createTable('employee',[
            'id'=> $this->primaryKey()->increments(),
            'employee_name' => $this->string()->notNull(),
            'employee_address' => $this->string(),
            'employee_email' => $this->string()->notNull()->unique(),
         ]);  
    }

    public function down()
    {
        $this->droptable('employee');
    }
   
}

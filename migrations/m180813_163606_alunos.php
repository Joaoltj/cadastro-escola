<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m180813_163606_alunos
 */
class m180813_163606_alunos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('alunos', [
            'id' => Schema::TYPE_PK,
            'matricula' =>Schema::TYPE_INTEGER,
            'nome' => Schema::TYPE_STRING,
            'nascimento' => Schema::TYPE_DATE,
            'turma' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING,
            'timestamp' => Schema::TYPE_INTEGER

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180813_163606_alunos cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180813_163606_alunos cannot be reverted.\n";

        return false;
    }
    */
}

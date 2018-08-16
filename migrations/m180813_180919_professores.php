<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m180813_180919_professores
 */
class m180813_180919_professores extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('professores', [
           'id' => Schema::TYPE_PK,
           'nome' => Schema::TYPE_STRING
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180813_180919_professores cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180813_180919_professores cannot be reverted.\n";

        return false;
    }
    */
}

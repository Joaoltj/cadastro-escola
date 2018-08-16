<?php

use yii\db\Migration;

/**
 * Handles the creation of table `alunos_professores`.
 * Has foreign keys to the tables:
 *
 * - `alunos`
 * - `professores`
 */
class m180813_192143_create_junction_table_for_alunos_and_professores_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('alunos_professores', [
            'alunos_id' => $this->integer(),
            'professores_id' => $this->integer(),
            'PRIMARY KEY(alunos_id, professores_id)',
        ]);

        // creates index for column `alunos_id`
        $this->createIndex(
            'idx-alunos_professores-alunos_id',
            'alunos_professores',
            'alunos_id'
        );

        // add foreign key for table `alunos`
        $this->addForeignKey(
            'fk-alunos_professores-alunos_id',
            'alunos_professores',
            'alunos_id',
            'alunos',
            'id',
            'CASCADE'
        );

        // creates index for column `professores_id`
        $this->createIndex(
            'idx-alunos_professores-professores_id',
            'alunos_professores',
            'professores_id'
        );

        // add foreign key for table `professores`
        $this->addForeignKey(
            'fk-alunos_professores-professores_id',
            'alunos_professores',
            'professores_id',
            'professores',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `alunos`
        $this->dropForeignKey(
            'fk-alunos_professores-alunos_id',
            'alunos_professores'
        );

        // drops index for column `alunos_id`
        $this->dropIndex(
            'idx-alunos_professores-alunos_id',
            'alunos_professores'
        );

        // drops foreign key for table `professores`
        $this->dropForeignKey(
            'fk-alunos_professores-professores_id',
            'alunos_professores'
        );

        // drops index for column `professores_id`
        $this->dropIndex(
            'idx-alunos_professores-professores_id',
            'alunos_professores'
        );

        $this->dropTable('alunos_professores');
    }
}

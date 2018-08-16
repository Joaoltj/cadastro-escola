<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "professores".
 *
 * @property int $id
 * @property string $nome
 *
 * @property AlunosProfessores[] $alunosProfessores
 * @property Alunos[] $alunos
 */
class Professores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'professores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunosProfessores()
    {
        return $this->hasMany(AlunosProfessores::className(), ['professores_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunos()
    {
        return $this->hasMany(Alunos::className(), ['id' => 'alunos_id'])->viaTable('alunos_professores', ['professores_id' => 'id']);
    }
}

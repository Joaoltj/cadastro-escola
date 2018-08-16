<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alunos_professores".
 *
 * @property int $alunos_id
 * @property int $professores_id
 *
 * @property Alunos $alunos
 * @property Professores $professores
 */
class AlunosProfessores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alunos_professores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alunos_id', 'professores_id'], 'required'],
            [['alunos_id', 'professores_id'], 'integer'],
            [['alunos_id', 'professores_id'], 'unique', 'targetAttribute' => ['alunos_id', 'professores_id']],
            [['alunos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Alunos::className(), 'targetAttribute' => ['alunos_id' => 'id']],
            [['professores_id'], 'exist', 'skipOnError' => true, 'targetClass' => Professores::className(), 'targetAttribute' => ['professores_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'alunos_id' => 'Alunos',
            'professores_id' => 'Professores',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunos()
    {
        return $this->hasOne(Alunos::className(), ['id' => 'alunos_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfessores()
    {
        return $this->hasOne(Professores::className(), ['id' => 'professores_id']);
    }
}

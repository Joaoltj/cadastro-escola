<?php

namespace app\models;
use app\behaviors\DataBehaviors;
use Yii;

/**
 * This is the model class for table "alunos".
 *
 * @property int $id
 * @property int $matricula
 * @property string $nome
 * @property string $nascimento
 * @property string $turma
 * @property string $email
 * @property int $timestamp
 */
class Alunos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alunos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['matricula', 'timestamp'], 'integer'],
            [['nascimento'], 'safe'],
            ['email', 'email'],
            [['nome', 'turma', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [

            'dataConverete'=>[
                'class'=>DataBehaviors::className()
            ]
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matricula' => 'Matricula',
            'nome' => 'Nome',
            'nascimento' => 'Nascimento',
            'turma' => 'Turma',
            'email' => 'Email',
            'timestamp' => 'Timestamp',
        ];
    }
}

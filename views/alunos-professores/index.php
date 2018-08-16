<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlunosProfessoresSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
use app\models\Alunos;
use app\models\Professores;
$this->title = 'Alunos Professores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alunos-professores-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Alunos Professores', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?=



    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                    'attribute'=>'alunos_id',
                    'content'=>function($model,$key,$index,$column){
                        $aluno = Alunos::find()->where(['id'=>$model->alunos_id])->limit(1)->all();

                        return $aluno[0]->nome;
    }

            ],
            [
                    'attribute'=>'professores_id',
                    'content'=>function($model,$key,$index,$column){
                        $prof = Professores::find()->where(['id'=>$model->professores_id])->limit(1)->all();

                        return $prof[0]->nome;
                    }

            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AlunosProfessores */

$this->title = $model->alunos_id;
$this->params['breadcrumbs'][] = ['label' => 'Alunos Professores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
use app\models\Alunos;
use app\models\Professores;
?>
<div class="alunos-professores-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'alunos_id' => $model->alunos_id, 'professores_id' => $model->professores_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'alunos_id' => $model->alunos_id, 'professores_id' => $model->professores_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                    'attribute'=>'alunos_id',

           

            ],
            'professores_id',
        ],
    ]) ?>

</div>

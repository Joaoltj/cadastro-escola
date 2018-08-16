<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AlunosProfessores */

$this->title = 'Update Alunos Professores: ' . $model->alunos_id;
$this->params['breadcrumbs'][] = ['label' => 'Alunos Professores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->alunos_id, 'url' => ['view', 'alunos_id' => $model->alunos_id, 'professores_id' => $model->professores_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alunos-professores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

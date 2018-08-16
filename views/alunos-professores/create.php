<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AlunosProfessores */

$this->title = 'Create Alunos Professores';
$this->params['breadcrumbs'][] = ['label' => 'Alunos Professores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alunos-professores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

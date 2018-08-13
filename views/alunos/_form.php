<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alunos */
/* @var $form yii\widgets\ActiveForm */
use yii\jui\DatePicker;
?>

<div class="alunos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'matricula')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?=  $form->field($model, 'nascimento')->widget(
        DatePicker::className(), [
        'language' => 'pt',
        'inline' => true,
        'dateFormat' => 'dd/MM/yyyy'
    ]);?>

    <?= $form->field($model, 'turma')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

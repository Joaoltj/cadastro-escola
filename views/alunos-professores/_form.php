<?php
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\widget\Select;
use app\models\Alunos;
use app\models\Professores;
use yii\jui\Selectable;
/* @var $this yii\web\View */
/* @var $model app\models\AlunosProfessores */
/* @var $form yii\widgets\ActiveForm */
use yii\jui\Spinner;
use yii\helpers\ArrayHelper;


?>

<div class="alunos-professores-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'professores_id')->dropDownList(ArrayHelper::map(Professores::find()->all(),'id','nome')) ?>

    <!--?= $form->field($model, 'professores_id')->textInput() ?-->


    <?php



    echo $form->field($model,'alunos_id')->dropDownList(ArrayHelper::map(Alunos::find()->all(),'id','nome')); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'apellido_materno')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'apellido_paterno')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'edad')->textInput() ?>

    <?= $form->field($model, 'genero')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'direccion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telefono')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estado')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ciudad')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'nu_clase')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

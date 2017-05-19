<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Datos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="datos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'carrera')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'grupo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estado_civil')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

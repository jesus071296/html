<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Civil */

$this->title = Yii::t('app', 'Create Civil');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Civils'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="civil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

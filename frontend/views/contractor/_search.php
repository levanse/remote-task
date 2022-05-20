<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\ContractorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contractor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nip') ?>

    <?= $form->field($model, 'region') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'street') ?>

    <?php // echo $form->field($model, 'house_number') ?>

    <?php // echo $form->field($model, 'apartment_number') ?>

    <?php // echo $form->field($model, 'vat') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

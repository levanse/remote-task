<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Delegation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="delegation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_from')->textInput() ?>

    <?= $form->field($model, 'date_to')->textInput() ?>

    <?= $form->field($model, 'place_departure')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'place_arrival')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Contractor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contractor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'region')->textInput() ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_creation')->textInput() ?>

    <?= $form->field($model, 'street')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'house_number')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'apartment_number')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'comments')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

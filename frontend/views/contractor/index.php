<?php

use common\helpers\Constant;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Contractor */

$this->title = 'Różne kontrolki HTML';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="contractor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput() ?>

    <?= $form->field($model, 'region')->textInput() ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'date_creation')->textInput() ?>

    <?= $form->field($model, 'street')->textInput() ?>

    <?= $form->field($model, 'house_number')->textInput() ?>

    <?= $form->field($model, 'apartment_number')->textInput() ?>

    <?= $form->field($model, 'comments')->textInput() ?>

    <?php ActiveForm::end(); ?>

    <div class="row">
        <div class="col-4">
            <?= Html::dropDownList('id', '', Constant::$colors, ['prompt' => 'Wybierz kolor']) ?>
        </div>
        <div class="col-4">
            <?= Html::dropDownList('id', '', Constant::$vat, ['prompt' => 'Wybierz VAT']) ?>
        </div>
        <div class="col-4">
            <ol>
                <li>Element</li>
                <li>Element</li>
                <li>Element</li>
            </ol>
        </div>
    </div>

</div>

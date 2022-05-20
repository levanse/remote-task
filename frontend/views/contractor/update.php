<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Contractor */

$this->title = 'Edycja kontrahenta: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dane Kontrahentów', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Edycja kontrahenta';
?>

<div class="contractor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

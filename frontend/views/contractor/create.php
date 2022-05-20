<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Contractor */

$this->title = 'Dodawanie kontrahenta';
$this->params['breadcrumbs'][] = ['label' => 'Dane Kontrahentów', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="contractor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

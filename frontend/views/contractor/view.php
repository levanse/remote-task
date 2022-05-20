<?php

use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Contractor */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dane Kontrahentów', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>

<div class="contractor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Edycja kontrahenta', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Usuwanie kontrahenta', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nip',
            'region',
            'name',
            'vat',
            'street',
            'house_number',
            'apartment_number',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tabela Delegacji BD';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="delegation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => "{items}",
        'columns' => [
            'id',
            'name_lastname',
            'date_from',
            'date_to',
            'place_departure',
            'place_arrival',
        ],
    ]); ?>

</div>

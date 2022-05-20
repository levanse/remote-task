<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ContractorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dane Kontrahentów';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="contractor-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Dodawanie kontrahenta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'layout' => "{items}",
        'columns' => [

            'nip',
            'region',
            'name',
            'street',
            'house_number',
            'apartment_number',
            'vat:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

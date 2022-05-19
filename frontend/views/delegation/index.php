<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\DelegationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Delegations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="delegation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Delegation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_lastname',
            'date_from',
            'date_to',
            'place_departure',
            //'place_arrival',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Delegation $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>

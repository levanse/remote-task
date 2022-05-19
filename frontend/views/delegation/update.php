<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Delegation */

$this->title = 'Update Delegation: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Delegations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="delegation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

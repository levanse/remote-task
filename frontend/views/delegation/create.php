<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Delegation */

$this->title = 'Create Delegation';
$this->params['breadcrumbs'][] = ['label' => 'Delegations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="delegation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

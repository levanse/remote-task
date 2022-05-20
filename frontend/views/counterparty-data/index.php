<?php

/* @var $this yii\web\View */

use common\helpers\Constant;
use yii\helpers\Html;

$this->title = 'Różne kontrolki HTML';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="counterparty-data-index">

    <p>
        <?= Html::label('NIP', 'nip') ?>
        <?= Html::input('textbox', 'nip', '', ['class' => 'form-control']) ?>
    </p>
    <p>
        <?= Html::label('Regon', 'regon') ?>
        <?= Html::input('int', 'regon', '', ['class' => 'form-control']) ?>
    </p>
    <p>
        <?= Html::label('Nazwa', 'nazwa') ?>
        <?= Html::input('textbox', 'nazwa', '', ['class' => 'form-control']) ?>
    </p>
    <p>
        <?= Html::label('Data powstania', 'data-powstania') ?>
        <?= Html::input('date', 'data-powstania', '', ['class' => 'form-control']) ?>
    </p>
    <p>
        <?= Html::label('Ulica', 'ulica') ?>
        <?= Html::input('textbox', 'ulica', '', ['class' => 'form-control']) ?>
    </p>
    <p>
        <?= Html::label('Numer domu', 'numer-domu') ?>
        <?= Html::input('textbox', 'numer-domu', '', ['class' => 'form-control']) ?>
    </p>
    <p>
        <?= Html::label('Numer mieszkania', 'numer-mieszkania') ?>
        <?= Html::input('textbox', 'numer-mieszkania', '', ['class' => 'form-control']) ?>
    </p>
    <p>
        <?= Html::label('Uwagi', 'uwagi') ?>
        <?= Html::input('textarea', 'uwagi', '', ['class' => 'form-control']) ?>
    </p>

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

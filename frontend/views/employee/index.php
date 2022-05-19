<?php

/* @var $this yii\web\View */

use common\helpers\Constant;
use yii\helpers\Html;

$this->title = 'Tabela Pracowników';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="employee-index">
    <div class="row">
        <div class="col-3">
            <?= Html::dropDownList('id', '', Constant::$colors, ['id' => 'even', 'prompt' => 'Wybierz kolor']) ?>
        </div>
        <div class="col-3">
            <?= Html::dropDownList('id', '', Constant::$colors, ['id' => 'odd', 'prompt' => 'Wybierz kolor']) ?>
        </div>
    </div>
</div>

<table class="table table-hover">
    <thead>
    <tr class="title">
        <th scope="col">Lp</th>
        <th scope="col">Imię</th>
        <th scope="col">Nazwisko</th>
        <th scope="col">Stanowisko</th>
        <th scope="col">Data zatrudnienia</th>
        <th scope="col">Ilość dni urlopowych</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>Programista</td>
        <td>04.02.2022</td>
        <td>14</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Kierowca</td>
        <td>05.08.2020</td>
        <td>10</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>Adamson</td>
        <td>Budowniczy</td>
        <td>15.09.2019</td>
        <td>20</td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>Sharon</td>
        <td>Smith</td>
        <td>Piekarz</td>
        <td>25.05.2005</td>
        <td>25</td>
    </tr>
    <tr>
        <th scope="row">5</th>
        <td>David</td>
        <td>Brown</td>
        <td>Sprzedawca</td>
        <td>06.10.2021</td>
        <td>20</td>
    </tr>
    </tbody>
</table>

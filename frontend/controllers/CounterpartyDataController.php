<?php

namespace frontend\controllers;

use yii\web\Controller;

class CounterpartyDataController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', []);
    }
}

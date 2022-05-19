<?php

namespace frontend\controllers;

use yii\web\Controller;

class EmployeeController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', []);
    }
}

<?php

namespace backend\controllers;

use common\models\Order;
use yii\web\Controller;

class OrderController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}

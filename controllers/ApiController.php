<?php

namespace app\controllers;

use yii\web\Controller;
use yii\web\Response;

class ApiController extends Controller
{
    public function actionData()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'status' => 'success',
            'data' => [
                'id' => 1,
                'name' => 'مثال',
                'type' => 'json',
                'description' => 'این یک داده استاتیک است',
            ]
        ];
    }
}

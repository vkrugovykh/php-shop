<?php
/**
 * Created by PhpStorm.
 * User: Vassiliy
 * Date: 16.01.2019
 * Time: 11:14
 */

namespace app\controllers;


use yii\web\Controller;
use app\models\Good;

class GoodController extends Controller
{
    public function actionIndex($name)
    {
        $good = new Good();
        $good = $good->getOneGood($name);
        return $this->render('index', compact('good'));
    }
}
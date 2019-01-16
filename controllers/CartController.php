<?php
/**
 * Created by PhpStorm.
 * User: Vassiliy
 * Date: 16.01.2019
 * Time: 12:10
 */

namespace app\controllers;

use app\models\Good;
use yii\web\Controller;
use app\models\Cart;
use Yii;

class CartController extends Controller
{
    public function actionOpen()
    {
        $session = Yii::$app->session;
        $session->open();
//        $session->remove('cart');
//        $session->remove('cart.totalQuantity');
//        $session->remove('cart.totalSum');
        return $this->renderPartial('cart', compact('session'));
    }

    public function actionAdd($name)
    {
        $good = new Good();
        $good = $good->getOneGood($name);
        $session = Yii::$app->session;
        $session->open();
//        $session->remove('cart');
        $cart = new Cart();
        $cart->addToCart($good);
        return $this->renderPartial('cart', compact('good', 'session'));
    }
}
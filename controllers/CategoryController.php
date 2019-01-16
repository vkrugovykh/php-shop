<?php
/**
 * Created by PhpStorm.
 * User: Vassiliy
 * Date: 15.01.2019
 * Time: 15:16
 */

namespace app\controllers;

use app\models\Good;
use app\models\Category;
use yii\web\Controller;
use Yii;

class CategoryController extends Controller
{

    public function actionIndex() {
        $goods = new Good();
        $goods = $goods->getAllGoods();
        return $this->render('index', compact('goods'));
    }

    public function actionView($id)
    {
        $goods = new Good();
        $goods = $goods->getGoodsCategories($id);

        //Получаем название категории
        $title = new Category();
        $title = $title->getCategoryTitle($id);

        return $this->render('view', compact('goods', 'title'));
    }

    public function actionSearch()
    {
//        $search = Yii::$app->request->get('search');
        $search = \yii\helpers\Html::encode(Yii::$app->request->get('search')); //Защита от XSS
        $goods = new Good();
        $goods = $goods->getSearchResults($search);
        return $this->render('search', compact('goods', 'search'));
    }
}
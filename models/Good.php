<?php
/**
 * Created by PhpStorm.
 * User: Vassiliy
 * Date: 15.01.2019
 * Time: 15:29
 */

namespace app\models;

use yii\db\ActiveRecord;
use Yii;

class Good extends ActiveRecord
{
    public static function tableName()
    {
        return 'good';
    }

    public function getAllGoods()
    {
        $goods = Yii::$app->cache->get('goods');
        if (!$goods) {
            $goods = Good::find()->asArray()->all();
            Yii::$app->cache->set('goods', $goods, 10);
        }

        return $goods;
    }

    public function getGoodsCategories($id)
    {
        $catGoods = Yii::$app->cache->get($id);
        if (!$catGoods) {
            $catGoods = Good::find()->where(['category' => $id])->asArray()->all();
            Yii::$app->cache->set($id, $catGoods, 10);
        }
        return $catGoods;
    }

    public function getSearchResults($search)
    {
        $searchResults = Good::find()->where(['like', 'name', $search])->asArray()->all();
        return $searchResults;
    }
}
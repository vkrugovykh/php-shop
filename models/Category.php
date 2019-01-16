<?php
/**
 * Created by PhpStorm.
 * User: Vassiliy
 * Date: 15.01.2019
 * Time: 16:23
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

    public static function tableName()
    {
        return 'category';
    }

    public function getCategories()
    {
        return Category::find()->asArray()->all();
    }

    public function getCategoryTitle($id) //Название категории
    {
        return Category::find()->where(['cat_name' => $id])->one();
    }

}
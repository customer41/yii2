<?php

namespace app\controllers;

use app\models\Post;
use yii\web\Controller;

class IndexController extends Controller
{
    public function actionDefault()
    {
        $post = Post::find()->orderBy(['created' => SORT_DESC])->one();
        return $this->render('default', ['post' => $post]);
    }
}
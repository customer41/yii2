<?php

namespace app\controllers;

use app\models\Post;
use yii\web\Controller;

class PostController extends Controller
{
    public function actionOne($id = 0)
    {
        $post = Post::findOne(['id' => $id]);
        return $this->render('one', ['post' => $post]);
    }
}
<?php

namespace app\controllers;

use app\models\Post;
use yii\web\Controller;
use yii\web\HttpException;

class PostController extends Controller
{
    public function actionOne($id = 0)
    {
        $post = Post::findOne(['id' => $id]);
        if (null == $post) {
            throw new HttpException(404, 'Запрашиваемый пост не найден');
        }
        return $this->render('one', ['post' => $post]);
    }

    public function actionAll()
    {
        $posts = Post::find()->orderBy(['created' => SORT_DESC])->all();
        return $this->render('all', ['posts' => $posts]);
    }
}
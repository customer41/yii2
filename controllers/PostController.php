<?php

namespace app\controllers;

use app\models\Comment;
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
        $roots = Comment::find()->where(['post_id' => $post->id])->roots()->all();
        $comments = [];
        foreach ($roots as $root) {
            $tree = $root->children()->all();
            array_unshift($tree, $root);
            $comments[] = $tree;
        }
        return $this->render('one', ['post' => $post, 'comments' => $comments]);
    }

    public function actionAll()
    {
        $posts = Post::find()->orderBy(['created' => SORT_DESC])->all();
        return $this->render('all', ['posts' => $posts]);
    }
}
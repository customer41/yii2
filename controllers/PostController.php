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
        $comments = $post->comments;


        $comments = Comment::find()->where(['tree' => 2])->orderBy('lft')->all();

        function getTabs($depth) {
            $tabs = '';
            while ($depth > 0) {
                $tabs .= '&emsp;&emsp;';
                $depth--;
            }
            return $tabs;
        }

        foreach ($comments as $comment) {
            echo getTabs($comment->depth) . $comment->body . '<br>';
        }
        die;

        return $this->render('one', ['post' => $post, 'comments' => $comments]);
    }

    public function actionAll()
    {
        $posts = Post::find()->orderBy(['created' => SORT_DESC])->all();
        return $this->render('all', ['posts' => $posts]);
    }
}
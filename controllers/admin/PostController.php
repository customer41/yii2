<?php

namespace app\controllers\admin;

use app\models\Post;
use yii\web\Controller;
use yii\web\HttpException;

class PostController extends Controller
{
    public function actionDefault()
    {
        $posts = Post::find()->orderBy(['created' => SORT_DESC])->all();
        return $this->render('default', ['posts' => $posts]);
    }

    public function actionOne($id = 0)
    {
        $post = Post::findOne(['id' => $id]);
        if (null == $post) {
            throw new HttpException(404, 'Запрашиваемый пост не найден');
        }
        return $this->render('one', ['post' => $post]);
    }

    public function actionAdd()
    {
        $post = new Post;
        return $this->render('add', ['post' => $post]);
    }

    public function actionSave($id = null)
    {
        $data = \Yii::$app->request->post();
        if (!empty($data)) {
            if (isset($id)) {
                $post = Post::findOne(['id' => $id]);
                if (null == $post) {
                    throw new HttpException(404, 'Запрашиваемый пост не найден');
                }
            } else {
                $post = new Post;
            }
            $post->load($data);
            $res = $post->save();
            if ($res) {
                \Yii::$app->session->setFlash('success', 'Пост успешно сохранён!');
            } else {
                \Yii::$app->session->setFlash('error', 'Ошибка сохранения поста!');
            }
        }
        $this->redirect('/admin/post');
    }

    public function actionDelete($id = 0)
    {
        $post = Post::findOne(['id' => $id]);
        if (null == $post) {
            throw new HttpException(404, 'Запрашиваемый пост не найден');
        }
        $res = $post->delete();
        if (false == $res) {
            \Yii::$app->session->setFlash('error', 'Ошибка удаления поста!');
        } else {
            \Yii::$app->session->setFlash('success', 'Пост успешно удалён!');
        }
        return $this->redirect('/admin/post');
    }

    public function actionEdit($id = 0)
    {
        $post = Post::findOne(['id' => $id]);
        if (null == $post) {
            throw new HttpException(404, 'Запрашиваемый пост не найден');
        }
        return $this->render('edit', ['post' => $post]);
    }
}
<?php

namespace app\components;

use app\models\Comment;
use yii\base\Widget;

class AddCommentWidget extends Widget
{
    public $postId;

    public function run()
    {
        $comment = new Comment;
        return $this->render('add-comment', ['comment' => $comment, 'postId' => $this->postId]);
    }
}
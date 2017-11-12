<?php

namespace app\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public static function tableName()
    {
        return 'posts';
    }

    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['post_id' => 'id']);
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок поста',
            'intro' => 'Введение',
            'text' => 'Содержимое поста',
        ];
    }

    public function rules()
    {
        return [
            [['title', 'intro'], 'required'],
            [['title', 'intro'], 'trim'],
            ['text', 'safe'],
        ];
    }
}
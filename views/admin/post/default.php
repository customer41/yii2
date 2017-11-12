<?php
use \yii\helpers\Html;
use \yii\helpers\Url;

$this->title = 'Админ-панель / посты';
?>

<h1><?php echo Html::a('Админ-панель', Url::to('/admin')); ?> / посты</h1><hr>
<p><?php echo Html::a('Добавить пост', Url::to('/admin/post/add'), ['class'=>'btn btn-success']); ?></p><br>

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif; ?>
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('error'); ?>
    </div>
<?php endif; ?>

<table class="table">
    <tr>
        <th>Название поста</th>
        <th>Редактирование</th>
        <th>Удаление</th>
    </tr>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo Html::a($post->title, Url::to('/admin/post/one?id=' . $post->id)); ?></td>
            <td><?php echo Html::a('Редактировать', Url::to('/admin/post/edit?id=' . $post->id), ['class' => 'btn btn-warning']); ?></td>
            <td><?php echo Html::a('Удалить', Url::to('/admin/post/delete?id=' . $post->id), ['class' => 'btn btn-danger']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
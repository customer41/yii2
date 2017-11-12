<?php
use \yii\helpers\Html;
use \yii\helpers\Url;

$this->title = 'Админ-панель / посты';
?>

<h1>
    <?php echo Html::a('Админ-панель', Url::to('/admin')); ?> /
    <?php echo Html::a('посты', Url::to('/admin/post')); ?> / просмотр
</h1>
<hr>

<article>
    <header>
        <h3><?php echo $post->title; ?></h3>
    </header>
    <p>
        <?php echo $post->text; ?>
    </p>
    <footer>
        <h4>
            Добавлено: <?php echo $post->created; ?>
        </h4>
    </footer>
</article>

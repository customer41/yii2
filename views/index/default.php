<?php
use \yii\helpers\Html;
use \yii\helpers\Url;

$this->title = 'Блог Александра Попова';

if (null == $post): ?>
    <h2>Нет ни одного поста...</h2>
<?php else: ?>
    <article>
        <header>
            <h3><?php echo Html::a($post->title, Url::to('/post/one?id=' . $post->id)); ?></h3>
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
<?php endif; ?>
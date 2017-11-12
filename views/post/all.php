<?php
use \yii\helpers\Html;
use \yii\helpers\Url;

$this->title = 'Посты';

if (empty($posts)): ?>
    <h2>Нет ни одного поста...</h2>
<?php else:
    foreach ($posts as $post): ?>
        <article>
            <header>
                <h3><?php echo Html::a($post->title, Url::to('/post/one?id=' . $post->id)); ?></h3>
            </header>
            <p>
                <?php echo $post->intro; ?>
            </p>
            <footer>
                <h4>
                    Добавлено: <?php echo $post->created; ?>
                </h4>
            </footer>
        </article>
        <hr>
    <?php endforeach; ?>
<?php endif; ?>
<?php
use yii\helpers\Html;
use app\components\AddCommentWidget;

$this->title = 'Пост';
?>
<section>
    <article>
        <header>
            <h3><?php echo $post->title; ?></h3>
        </header>
        <p>
            <?php echo $post->text; ?>
        </p>
        <footer>
            <h4>
                <small>Добавлено: <?php echo $post->created; ?></small>
            </h4>
        </footer>
        <hr>
    </article>
</section>
<section>
<?php if (empty($comments)): ?>
    <h3>Комментариев пока нет...</h3>
    <?php echo AddCommentWidget::widget(['postId' => $post->id]); ?>
<?php else: ?>
    <h3>Комментарии к посту:</h3>
    <?php foreach ($comments as $tree): ?>
        <?php foreach ($tree as $comment): ?>
            <article>
                <div class="panel panel-default col-md-offset-<?php echo $comment->depth; ?>">
                    <div class="panel-body">
                        <?php echo $comment->body; ?>
                    </div>
                    <footer>
                        <div class="panel-footer">
                            <small>
                                <?php echo $comment->created; ?> |
                                <?php echo Html::a('Ответить', '#'); ?>
                            </small>
                        </div>
                    </footer>
                </div>
            </article>
        <?php endforeach; ?>
    <?php endforeach; ?>
<?php endif; ?>
</section>
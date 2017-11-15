<?php
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

<?php echo \app\components\AddCommentWidget::widget(['postId' => $post->id]); ?>

<section>
    <?php $comments = $post->comments; ?>
    <?php if (empty($comments)): ?>
        <h3>Комментариев пока нет...</h3>
    <?php else: ?>
        <h3>Комментарии к посту:</h3>
        <?php foreach ($comments as $comment): ?>
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php echo $comment->body; ?>
                </div>
                <footer>
                    <div class="panel-footer">
                        <?php echo $comment->created; ?>
                    </div>
                </footer>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</section>
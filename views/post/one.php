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
    <?php if (empty($comments)): ?>
        <h3>Комментариев пока нет...</h3>
    <?php else: ?>

    <?php endif; ?>
</section>
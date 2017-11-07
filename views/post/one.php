<?php
    $this->title = 'Пост';
?>
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
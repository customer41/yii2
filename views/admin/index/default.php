<?php
use \yii\helpers\Html;
use \yii\helpers\Url;

$this->title = 'Админ-панель';
?>

<h1>Админ-панель</h1>
<hr>
<p>На данный момент для администрирования доступны следующие объекты:</p>

<ul>
    <li><h3><?php echo Html::a('Посты', Url::to('/admin/post')); ?></h3></li>
</ul>

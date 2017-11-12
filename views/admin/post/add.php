<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use mihaildev\ckeditor\CKEditor;

$this->title = 'Админ-панель / посты';
?>

<h1>
    <?php echo Html::a('Админ-панель', Url::to('/admin')); ?> /
    <?php echo Html::a('посты', Url::to('/admin/post')); ?> / добавление
</h1>
<hr>

<?php $form = ActiveForm::begin(['action' => '/admin/post/save']); ?>
<?php echo $form->field($post, 'title'); ?>
<?php echo $form->field($post, 'intro')->textarea(['rows' => 5]); ?>
<?php echo $form->field($post, 'text')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full',
        'inline' => false,
    ],
]);
?>
<?php echo Html::submitButton('Добавить', ['class' => 'btn btn-success']); ?>
<?php ActiveForm::end(); ?>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin(['action' => '/comment/save?postId=' . $postId]); ?>
<?php echo $form->field($comment, 'body')->textarea(['rows' => 3])->label('Текст комментария'); ?>
<?php echo Html::submitButton('Добавить'); ?>
<?php ActiveForm::end(); ?>
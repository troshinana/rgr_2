<?php 
use yii\bootstrap\activeform;
use yii\helpers\arrayHelper;
?>
<h2> Изменение номера </h2>
	<?php  $form=ActiveForm::begin();?>
		<?=$form->field($room,'nomer_room')?>
		<?=$form->field($room,'cost')?>
		<?=$form->field($room,'type')?>
		<?=$form->field($room,'сharacteristic')?>
	<button class="btn btn-primary" type="submit"> Добавить </button>
<?php  ActiveForm::end(); ?>


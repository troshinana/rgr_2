<?php 
use yii\bootstrap\activeform;
use yii\helpers\arrayHelper;
?>
<h2> Изменение номера </h2>
<h2>Внимание! Если номер по техническим причинам не может принимать гостей, поставьте значение цены равной нулю, в форме редактирование!</h2>
	<?php  $form=ActiveForm::begin();?>
		<?=$form->field($room,'nomer_room')?>
		<?=$form->field($room,'cost')?>
		<?=$form->field($room,'type')?>
		
	<button class="btn btn-primary" type="submit"> Добавить </button>
<?php  ActiveForm::end(); ?>


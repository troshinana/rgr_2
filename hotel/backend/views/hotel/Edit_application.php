<?php 
use yii\bootstrap\ActiveForm;
use yii\helpers\arrayHelper;
?>
<h2> Рассмотрение заявки </h2>
	<?php  $form=ActiveForm::begin();?>
		<?=$form->field($application,'full_name')?>
		<?=$form->field($application,'date_of_birth')?>
		<?=$form->field($application->getCodeRoom()->one(),'nomer_room')?>
		<?=$form->field($application,'arrival_date')?>
		<?=$form->field($application,'date_of_departure')?>
		<?=$form->field($application,'status_application')->listbox([0=>"Отказ",1=>"Принять"])?>
		<button class="btn btn-primary" type="submit"> Перейти к бронированию </button>
<?php  ActiveForm::end(); ?>

<?php
use yii\bootstrap\ActiveForm; ?>
<?php Use \yii\helpers\Html; ?>
<h2> Информация по бронированию:  </h2>
	<p> Номер:  <?=htmlspecialchars($application->getCodeRoom()->one()->nomer_room)?> </p>
	<p>Тип номера - <?=htmlspecialchars($application->getCodeRoom()->one()->type)?></p> 
<p>Характеристика номера - <?=htmlspecialchars($application->getCodeRoom()->one()->сharacteristic)?> </p>
<h2> Заполните свои данные </h2>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($application, 'full_name') ?>
<?= $form->field($application, 'date_of_birth') ?>
<?= $form->field($application, 'residential_address') ?>
<?= $form->field($application, 'phone_number') ?>
<?= $form->field($application, 'arrival_date')->widget(\yii\jui\DatePicker::classname(), [
		'language' => 'ru',
		'dateFormat' => 'yyyy-MM-dd',
	])  ?>
<?= $form->field($application, 'date_of_departure')->widget(\yii\jui\DatePicker::classname(), [
		'language' => 'ru',
		'dateFormat' => 'yyyy-MM-dd',
	])  ?>
<button class="btn btn-primary" type="submit">Добавить</button>
<?php ActiveForm::end(); ?>
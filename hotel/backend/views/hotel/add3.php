<?php
use yii\bootstrap\ActiveForm; ?>
<?php Use \yii\helpers\Html; ?>
<p>Номер:  <?=htmlspecialchars($booking_room->getId0()->one()->code_room)?> </p>
	<p>Клиент: - <?=htmlspecialchars($booking_room->getId0()->one()->full_name)?></p> 
	<p>Дата заезда: - <?=htmlspecialchars($booking_room->getId0()->one()->arrival_date)?></p> 
	<p>Дата отъезда: - <?=htmlspecialchars($booking_room->getId0()->one()->date_of_departure)?></p> 
<h2> Добавление брони на основе заявки:  </h2>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($booking_room, 'status')->checkBox() ?>
<button class="btn btn-primary" type="submit">Добавить</button>
<?php ActiveForm::end(); ?>
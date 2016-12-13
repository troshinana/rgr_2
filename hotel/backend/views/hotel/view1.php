<?php Use \yii\helpers\Html; ?>
<h2> Бронирование номера выполнено успешно! </h2>
	<p>Номер:  <?=htmlspecialchars($booking_room->getId0()->one()->code_room)?> </p>
	<p>Клиент: - <?=htmlspecialchars($booking_room->getId0()->one()->full_name)?></p> 
	<p>Номер телефона клиента: - <?=htmlspecialchars($booking_room->getId0()->one()->phone_number)?></p> 
	<p>Дата заезда: - <?=htmlspecialchars($booking_room->getId0()->one()->arrival_date)?></p> 
	<p>Дата отъезда: - <?=htmlspecialchars($booking_room->getId0()->one()->date_of_departure)?></p> 
<h2>Созвонитесь с клиентом и подтвердите бронирование!</h2>

	
	
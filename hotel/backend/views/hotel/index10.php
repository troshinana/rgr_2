<?php Use \yii\helpers\Html; ?>
<h1 align='center'>Близжайшие заселения!</h1>
<p align='center'>Данные формируются на 7 календарных дней<p>
<?php 
	function dateToRussian($date) {
		$month = array("january"=>"января", "february"=>"февраля", "march"=>"марта", "april"=>"апреля", "may"=>"мая", "june"=>"июня", "july"=>"июля", "august"=>"августа", "september"=>"сентября", "october"=>"октября", "november"=>"ноября", "december"=>"декабря");
		$days = array("monday"=>"понедельник", "tuesday"=>"вторник", "wednesday"=>"среда", "thursday"=>"четверг", "friday"=>"пятница", "saturday"=>"суббота", "sunday"=>"воскресенье");
		return str_replace(array_merge(array_keys($month), array_keys($days)), array_merge($month, $days), strtolower($date));
	}
	echo 'Сегодня '.dateToRussian(date('l, j F Y')).' года';
	$parametr='0';
 ?>
<table class="table">
	<tr>
		<th>№ комнаты</th> 
		<th>ФИО клиента</th> 
		<th>Адрес</th> 
		<th>Телефон</th> 
		<th>Дата заезда</th> 
		<th>Дата выезда</th> 
	</tr>
	<?php foreach($booking_rooms as $booking_room){
			$arrival= $booking_room->getId0()->one()->arrival_date; 
			$arrival = strtotime($arrival); 
			$now = time(); 
			$now2 = mktime(0, 0, 0, date('m',$now), date('d',$now), date('Y',$now));  
			$next_arrival = mktime(0, 0, 0, date('m',$arrival), date('d',$arrival), date('Y')); 
			if ($next_arrival >= $now2 && $next_arrival <= strtotime("+7 day", $now2)) { 
			$parametr='1'?>
	<tr>	
		<td> <?=htmlspecialchars($booking_room->getId0()->one()->code_room) ?> </td>
		<td> <?= htmlspecialchars($booking_room->getId0()->one()->full_name)?> </td>
		<td> <?= htmlspecialchars($booking_room->getId0()->one()->residential_address)?> </td>
		<td> <?= htmlspecialchars($booking_room->getId0()->one()->phone_number)?> </td>
		<td> <?= htmlspecialchars($booking_room->getId0()->one()->arrival_date)?> </td>
		<td> <?= htmlspecialchars($booking_room->getId0()->one()->date_of_departure) ?> </td>
					
	</tr>
	<? } 
	} ?>
	<tr>
		<? 	if ($parametr == "0") { ?>
				<td colspan="6" class="text-center">В ближайшие 7 дней в компании не наблюдается именинников</td>
		<?  }?>
	</tr>

  	</table>
	
<?php Use \yii\helpers\Html; ?>
<h1 align='center'> После одобрения заявки необходимо добавить бронь!</h1>
<table class="table">
	<tr>
		<th>№</th> 
		<th>ФИО клиента</th> 
		<th>Дата рождения</th> 
		<th>Адрес</th> 
		<th>Телефон</th> 
		<th>Номер комнаты</th> 
		<th>Дата заезда</th> 
		<th>Дата выезда</th> 
		<th>Действия</th>
	</tr>
	<tr>
		<td> <?= $application->id?> </td>
		<td> <?= htmlspecialchars($application->full_name) ?> </td>
		<td> <?= htmlspecialchars($application->date_of_birth) ?> </td>
		<td> <?= htmlspecialchars($application->residential_address) ?> </td>
		<td> <?= htmlspecialchars($application->phone_number) ?> </td>
		<td> <?= htmlspecialchars($application->getCodeRoom()->one()->nomer_room) ?> </td>
		<td> <?= htmlspecialchars($application->arrival_date) ?> </td>
		<td> <?= htmlspecialchars($application->date_of_departure) ?> </td>
		<td> 		
			<?= Html::a('<span class="glyphicon glyphicon-plus "> Добавить бронь', ['hotel/add3','application'=>$application->id],['class'=>'btn btn-primary']); ?>
							
		</td>
	</tr>
</table>
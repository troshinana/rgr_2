<?php Use \yii\helpers\Html; ?>
<h1 align='center'> Номера гостиницы</h1>
<table class="table">
	<tr>
		<th>№ комнаты</th> 
		<th>Цена за сутки</th> 
		<th>Тип номера</th> 
		<th>Характеристики</th> 
	</tr>
	<?php foreach($rooms as $room){ ?>
	<tr>
		<td> <?= $room->nomer_room?> </td>
		<td> <?= htmlspecialchars($room->cost) ?> </td>
		<td> <?= htmlspecialchars($room->type) ?> </td>
		<td> <?= htmlspecialchars($room->сharacteristic) ?> </td>
		
	</tr>
	
	 <?php } ?>
	 <?= Html::a('Оставить заявку', ['hotel/add'],['class'=>'btn btn-primary']) ?>
  	</table>
	
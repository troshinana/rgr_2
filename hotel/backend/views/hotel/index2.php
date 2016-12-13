<?php Use \yii\helpers\Html; ?>
<h1 align='center'> Номера гостиницы</h1>
<h2 align='center'>Внимание! Если номер по техническим причинам не может принимать гостей, поставьте значение цены равной нулю, в форме редактирование! </h2>
<table class="table">
	<tr>
		<th>№ комнаты</th> 
		<th>Цена за сутки</th> 
		<th>Тип номера</th> 
		<th>Характеристики</th> 
		<th>Действия</th> 
		</tr>
	<?php foreach($rooms as $room){ ?>
	<tr>
		<td> <?= $room->nomer_room?> </td>
		<td> <?= htmlspecialchars($room->cost) ?> </td>
		<td> <?= htmlspecialchars($room->type) ?> </td>
		<td> <?= htmlspecialchars($room->сharacteristic) ?> </td>
		<td> 
		
			<?=Html::a('<span class="glyphicon glyphicon-pencil "> </span> Редактировать номер', ['hotel/edit1','code_room'=>$room->code_room],['class'=>'btn btn-primary'])?> 
			<?php 
			if (($room->getApplications()->having('status_application=1')->count()==0) && ($room->getApplications()->having('status_application=2')->count()==0)) { 
			
				echo Html::a('<span class="glyphicon glyphicon-remove "> </span> Удалить', ['hotel/delete1','code_room'=>$room->code_room],['class'=>'btn btn-primary']);
			}?>	
		
	
		</td>
			</tr> 
	 <?php } ?>
  	</table>
	
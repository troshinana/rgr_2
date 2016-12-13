<?php Use \yii\helpers\Html; ?>
<h2> Вы успешно отправили заявку на бронирование номера! </h2>
<p> Номер:  <?=htmlspecialchars($application->getCodeRoom()->one()->nomer_room)?> </p>
<p>Тип номера - <?=htmlspecialchars($application->getCodeRoom()->one()->type)?></p> 
<p>Характеристика номера - <?=htmlspecialchars($application->getCodeRoom()->one()->сharacteristic)?> </p>
<h2>Вам должно было прийти сообщение по номеру телефона который вы указали с информацией о вашем заказе!</h2>
<h2>Для подтверждения вашей заявки в близжайжее время с вами свяжется наш менеджер!</h2>
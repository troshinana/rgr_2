<?php
use yii\helpers\Html; 
use yii\bootstrap\ActiveForm; 
$this->registerjsfile(
"@web/Js/regform.js",
['depends'=>[\yii\web\JqueryAsset::className()]]
);
?>
<script type="text/javascript">
var reserved=<?php echo json_encode(array_unique($reserved))?>

</script>
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
	<div id="zapis"> 1 этаж - </div>
	<div id="places"> 2 этаж - </div>
	<?= $form->field($application, 'code_room')?>
	<button class="btn btn-primary" type="submit">Добавить</button>
<?php ActiveForm::end(); ?>

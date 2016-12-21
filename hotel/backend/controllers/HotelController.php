<?php
namespace backend\controllers;
use backend\models\BookingRoom;
use backend\models\Room;
use backend\models\Application;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
/**
 * Site controller
 */
class HotelController extends Controller
{
public function actionIndex2()
{
$rooms = Room::find()->all();
return $this->render('index2', ['rooms'=>$rooms]);
}
public function actionIndexa()
{
$applications = Application::find()->having('status_application=2')->orderBy(['full_name'=>SORT_ASC])->all();
return $this->render('indexa', ['applications'=>$applications]);
}
public function actionEditt($id){
$application=Application::findOne($id);
if ($application) {
if (isset($_POST['Application'])) {
$application->attributes=$_POST['Application'];
If ($application->save()) {
if ($application->status_application=='0'){
return $this->render('view');
}
return $this->render('index5',['application'=>$application]);
}
}
}else {
throw new \yii\web\NotFoundHttpException ('Заявка не найдена');
}
	
		return $this->render('Edit_application',['application'=>$application]); 
		
	}
	public function actionEdit1($code_room){
		$room=Room::findOne($code_room);
		if ($room) {			
		if (isset($_POST['Room'])) {
			$room->attributes=$_POST['Room'];
			If ($room->save()) {
				return $this->render('view5',['room'=>$room]);
			}
	
		} 
	} else {
			throw new \yii\web\NotFoundHttpException ('Комната не найдена');
		}
		
		return $this->render('edit1',['room'=>$room]); 
		
	}
	
public function actionDelete ($id)
	{
		$application=Application::findOne($id);
		if ($application) {
			
	
		$application->delete();
		return $this->redirect(['hotel/indexa']);
		
		}else {
			throw new \yii\web\NotFoundHttpException ('Заявка не найдена');
		}
	}	
	
	public function actionIndex5($application)
	{
		if ($application) {
	$application=Application::findOne($id);
	return $this->render('index5', ['application'=>$application]);
			} else {
			throw new \yii\web\NotFoundHttpException ('Заявка не найдена');
		}
	}
	
	
	public function actionDelete1 ($code_room)
	{
		$room=Room::findOne($code_room);
		if ($room) {
			
		if ($code_room) {
		$room->delete();
		return $this->redirect(['hotel/index2']);
		} 
		}else {
			throw new \yii\web\NotFoundHttpException ('Номер не найден');
		}
	}	
public function actionAdd3($application){
	$booking_room= new BookingRoom;
	$booking_room->status=1;
	$booking_room->id=$application;
	if ($application) {
	if (isset($_POST['BookingRoom'])){
			$booking_room->attributes=$_POST['BookingRoom'];
			if ($booking_room->save()){
				return $this -> render('view1', ['booking_room'=>$booking_room]);
			}
		}
		}else {
			throw new \yii\web\NotFoundHttpException ('Заявка не найдена');
		}
		return $this -> render('add3', ['booking_room'=> $booking_room]);	
	}
	
	
	public function actionIndex10()
	{
		$booking_rooms = BookingRoom::find()->all();
	return $this->render('index10', ['booking_rooms'=>$booking_rooms]);
	}	
	 public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }
}

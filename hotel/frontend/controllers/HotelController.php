<?php
/**
 * @file frontned/controllers/HotelController.php
 * 
 */
namespace frontend\controllers;
use yii\web\Controller;
use \frontend\models\BookingRoom;
use \frontend\models\Room;
use \frontend\models\Application;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class HotelController extends Controller
{	
	public function actionIndex2()
	{
		$rooms = Room::find()->having('cost!= 0')->all();
		return $this->render('index2', ['rooms'=>$rooms]);
	}
	
	public function actionAdd()
	{	$applications= Application :: find()
			-> having('status_application=2')
			->all();
			$reserved=[];
			foreach ($applications as $application) {
				$reserved[]=$application->code_room;
				
			}
		
		$application= new Application;
		if (isset($_POST['Application'])){
			$application->attributes=$_POST['Application'];
			if ($application->save()){
				return $this -> render('add2',['application'=> $application]);
				}
		}
		return $this -> render('add',
			array(
			'application'=> $application, 
			'reserved'=>$reserved
			)
		);
	}
	
	
	
	/*public function actionAdd($room)
	{ 	
		$r=Room::findOne($room);
		if (!$r) {
			throw new \yii\web\NotFoundHttpException ('Комната не найдена');
		}
		$application= new Application;
		$application->status_application=0;
		$application->code_room=$room;
		if (isset($_POST['Application'])){
			$application->attributes=$_POST['Application'];
			if ($application->save()){
				return $this -> render('add2',['application'=> $application]);
				}
		}
		return $this -> render('add', ['application'=> $application]);	
	}*/
		
	public function actionIndexa()
	{
		$applications = Application::find()->having('status_application=0')->orderBy(['full_name'=>SORT_ASC])->all();
		return $this->render('indexa', ['applications'=>$applications]);
	}
}

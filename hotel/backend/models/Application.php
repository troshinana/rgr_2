<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "application".
 *
 * @property integer $id
 * @property string $full_name
 * @property string $date_of_birth
 * @property string $residential_address
 * @property string $phone_number
 * @property integer $code_room
 * @property string $arrival_date
 * @property string $date_of_departure
 * @property integer $status_application
 *
 * @property Room $codeRoom
 * @property BookingRoom[] $bookingRooms
 */
class Application extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'application';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'date_of_birth', 'residential_address', 'phone_number', 'code_room', 'arrival_date','status_application', 'date_of_departure'], 'required'
			, 'message'=>'Поле обязательно для заполнения'],
            [['full_name', 'residential_address', 'phone_number'], 'string'],
			[['date_of_birth'], 'date', 'format' => 'y-m-d',
			'message'=>'Неверный формат даты'],
            [['date_of_birth', 'arrival_date', 'date_of_departure'], 'safe'],
            [['code_room', 'status_application'], 'integer'],
            [['code_room'], 'exist', 'skipOnError' => true, 'targetClass' => Room::className(), 'targetAttribute' => ['code_room' => 'code_room']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'ФИО',
            'date_of_birth' => 'Дата рождения',
            'residential_address' => 'Адрес проживания',
            'phone_number' => 'Номер телефона',
            'code_room' => 'Code Room',
            'arrival_date' => 'Дата заезда',
            'date_of_departure' => 'Дата отъезда',
            'status_application' => 'Действие',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodeRoom()
    {
        return $this->hasOne(Room::className(), ['code_room' => 'code_room']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingRooms()
    {
        return $this->hasMany(BookingRoom::className(), ['id' => 'id']);
    }
}

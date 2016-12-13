<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $code_room
 * @property integer $nomer_room
 * @property string $cost
 * @property string $сharacteristic
 *
 * @property BookingRoom[] $bookingRooms
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomer_room', 'cost', 'сharacteristic'], 'required'],
            [['nomer_room'], 'integer'],
            [['cost'], 'number'],
            [['сharacteristic'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code_room' => 'Code Room',
            'nomer_room' => 'Nomer Room',
            'cost' => 'Cost',
            'сharacteristic' => 'сharacteristic',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingRooms()
    {
        return $this->hasMany(BookingRoom::className(), ['code_room' => 'code_room']);
    }
}

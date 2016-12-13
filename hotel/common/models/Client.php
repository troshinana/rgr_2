<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Client".
 *
 * @property integer $code_client
 * @property string $full_name_client
 * @property string $date_of_birth
 * @property string $residential_address
 * @property string $phone_number
 *
 * @property BookingRoom[] $bookingRooms
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name_client', 'date_of_birth', 'residential_address', 'phone_number'], 'required'],
            [['full_name_client', 'residential_address', 'phone_number'], 'string'],
            [['date_of_birth'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code_client' => 'Code Client',
            'full_name_client' => 'full_name_client',
            'date_of_birth' => 'date_of_birth',
            'residential_address' => 'residential_address',
            'phone_number' => 'phone_number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingRooms()
    {
        return $this->hasMany(BookingRoom::className(), ['code_client' => 'code_client']);
    }
}

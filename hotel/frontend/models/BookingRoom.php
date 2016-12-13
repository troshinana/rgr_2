<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "booking_room".
 *
 * @property integer $code_booking
 * @property integer $id
 * @property integer $status
 *
 * @property Application $id0
 */
class BookingRoom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'booking_room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'required'],
            [['id', 'status'], 'integer'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Application::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code_booking' => 'Code Booking',
            'id' => 'ID',
            'status' => 'Бронь одобрена',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Application::className(), ['id' => 'id']);
    }
}


<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "Cooperator".
 *
 * @property integer $code_cooperator
 * @property string $position
 * @property string $full_name_cooperator
 * @property integer $status
 *
 * @property BookingRoom[] $bookingRooms
 */
class Cooperator extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Cooperator';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position', 'full_name_cooperator', 'status'], 'required'],
            [['position', 'full_name_cooperator'], 'string'],
            [['status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code_cooperator' => 'Code Cooperator',
            'position' => 'Position',
            'full_name_cooperator' => 'Full Name Cooperator',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookingRooms()
    {
        return $this->hasMany(BookingRoom::className(), ['code_cooperator' => 'code_cooperator']);
    }
}

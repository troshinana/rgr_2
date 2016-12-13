<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "room".
 *
 * @property integer $code_room
 * @property integer $nomer_room
 * @property string $cost
 * @property string $type
 * @property string $сharacteristic
 *
 * @property Application[] $applications
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
            [['nomer_room', 'cost', 'type', 'сharacteristic'], 'required','message'=>'Поле обязательно для заполнения'],
            [['nomer_room'], 'integer'],
            [['cost'], 'number'],
            [['type', 'сharacteristic'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code_room' => 'Code Room',
            'nomer_room' => 'Номер комнаты',
            'cost' => 'Цена',
            'type' => 'Тип',
            'сharacteristic' => 'Характеристика',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplications()
    {
        return $this->hasMany(Application::className(), ['code_room' => 'code_room']);
    }
}

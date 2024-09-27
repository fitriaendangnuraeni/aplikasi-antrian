<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Queue extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%queues}}';
    }

    public function rules()
    {
        return [
            [['merchant_id', 'service_id', 'user_id'], 'required'],
            ['queue_number', 'integer'],
        ];
    }

    public function relations()
    {
        return array(
            'merchant'=>array(self::BELONGS_TO, 'Merchant', 'merchant_id'),
            'service'=>array(self::BELONGS_TO, 'Service', 'service_id'),
            'user'=>array(self::BELONGS_TO, 'User', 'user_id')
        );
    }

    public function getMerchant()
    {
        return $this->hasOne(Merchant::class, ['id' => 'merchant_id']);
    }

    public function getService()
    {
        return $this->hasOne(Service::class, ['id' => 'service_id']);
    }
}

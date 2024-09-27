<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property int $merchant_id
 * @property string $name
 * @property string $description
 * @property float $price
 * @property string $created_at
 * @property Merchant $merchant
 */
class Service extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['merchant_id', 'name', 'price'], 'required'],
            [['merchant_id'], 'integer'],
            [['description'], 'string'],
            [['price'], 'number'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'merchant_id' => 'Merchant ID',
            'name' => 'Service Name',
            'description' => 'Description',
            'price' => 'Price',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Merchant]].
     */
    public function getMerchant()
    {
        return $this->hasOne(Merchant::class, ['id' => 'merchant_id']);
    }

    public function relations()
    {
        return array(
            'queue'=>array(self::HAS_MANY, 'Queue', 'service_id'),
            'merchant'=>array(self::BELONGS_TO, 'Merchant', 'merchant_id'),
        );
    }
}

<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "merchants".
 *
 * @property int $id
 * @property string $name
 * @property string|null $location
 * @property string|null $category
 * @property string $created_at
 */
class Merchant extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'merchants';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'safe'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 100],
            [['location'], 'string', 'max' => 255],
            [['category'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'location' => 'Location',
            'category' => 'Category',
            'created_at' => 'Created At',
        ];
    }

    public function getService()
    {
        return $this->hasMany(Service::className(), ['merchant_id' => 'id']);
    }

    public function relations()
    {
        return array(
            'queue'=>array(self::HAS_MANY, 'Queue', 'merchant_id'),
            'service'=>array(self::HAS_MANY, 'Service', 'merchant_id'),
        );
    }

    public function search($params)
    {
        $query = Merchant::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'name', $this->name])
              ->orFilterWhere(['like', 'category', $this->category]);

        return $dataProvider;
    }
}

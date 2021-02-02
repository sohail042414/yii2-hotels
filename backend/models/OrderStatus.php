<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%order_status}}".
 *
 * @property int $stats_id
 * @property int $merchant_id
 * @property string $description
 * @property string|null $date_created
 * @property string|null $date_modified
 * @property string $ip_address
 */
class OrderStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%order_status}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['merchant_id'], 'integer'],
            [['date_created', 'date_modified'], 'safe'],
            [['description'], 'string', 'max' => 200],
            [['ip_address'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'stats_id' => Yii::t('app', 'Stats ID'),
            'merchant_id' => Yii::t('app', 'Merchant ID'),
            'description' => Yii::t('app', 'Description'),
            'date_created' => Yii::t('app', 'Date Created'),
            'date_modified' => Yii::t('app', 'Date Modified'),
            'ip_address' => Yii::t('app', 'Ip Address'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return OrderStatusQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OrderStatusQuery(get_called_class());
    }
}

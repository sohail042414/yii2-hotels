<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%dishes}}".
 *
 * @property int $dish_id
 * @property string $dish_name
 * @property string $photo
 * @property string $status
 * @property string $date_created
 * @property string $date_modified
 * @property string $ip_address
 */
class Dish extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%dishes}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_created', 'date_modified'], 'safe'],
            [['dish_name', 'photo'], 'string', 'max' => 255],
            [['status', 'ip_address'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dish_id' => Yii::t('app', 'Dish ID'),
            'dish_name' => Yii::t('app', 'Dish Name'),
            'photo' => Yii::t('app', 'Photo'),
            'status' => Yii::t('app', 'Status'),
            'date_created' => Yii::t('app', 'Date Created'),
            'date_modified' => Yii::t('app', 'Date Modified'),
            'ip_address' => Yii::t('app', 'Ip Address'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return DishQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DishQuery(get_called_class());
    }
}

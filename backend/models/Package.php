<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%packages}}".
 *
 * @property int $package_id
 * @property string $title
 * @property string|null $description
 * @property float $price
 * @property float $promo_price
 * @property int $expiration
 * @property string $expiration_type
 * @property int $unlimited_post
 * @property int $post_limit
 * @property int $sequence
 * @property string $status
 * @property string $date_created
 * @property string $date_modified
 * @property string $ip_address
 * @property int $sell_limit
 */
class Package extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%packages}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [            
            [['price','promo_price','title','post_limit','expiration'], 'required'],
            [['description'], 'string'],
            [['price', 'promo_price'], 'number'],
            [['expiration', 'unlimited_post', 'post_limit', 'sequence', 'sell_limit'], 'integer'],
            [['date_created', 'date_modified'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['expiration_type', 'ip_address'], 'string', 'max' => 50],
            [['status'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'package_id' => Yii::t('app', 'Package ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'price' => Yii::t('app', 'Price'),
            'promo_price' => Yii::t('app', 'Promo Price'),
            'expiration' => Yii::t('app', 'Expiration(No of Days/Years)'),
            'expiration_type' => Yii::t('app', 'Expiration Type'),
            'unlimited_post' => Yii::t('app', 'Usage'),
            'post_limit' => Yii::t('app', 'Post Limit (Number of Food Items)'),
            'sequence' => Yii::t('app', 'Sequence'),
            'status' => Yii::t('app', 'Status'),
            'date_created' => Yii::t('app', 'Date Created'),
            'date_modified' => Yii::t('app', 'Date Modified'),
            'ip_address' => Yii::t('app', 'Ip Address'),
            'sell_limit' => Yii::t('app', 'Number of Merchants by Sell (Per month)'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return PackageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PackageQuery(get_called_class());
    }

    public function expirationTypeList(){
        return array(
            'days'=>Yii::t('app',"Days"),
            'year'=>Yii::t('app',"Year")
        );
    }

    public function usageList(){
        return array(
            2=>Yii::t('app',"Unlimited"),
            1=>Yii::t('app',"Limited")
        );
    }

    public function statusList(){
        return array(
            'publish'=>Yii::t("app",'Publish'),
            'pending'=>Yii::t("app",'Pending for review'),
            'draft'=>Yii::t("app",'Draft')
        );
    }
    
}

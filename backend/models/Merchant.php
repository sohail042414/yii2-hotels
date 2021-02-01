<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%merchant}}".
 *
 * @property int $merchant_id
 * @property string $restaurant_slug
 * @property string $restaurant_name
 * @property string $restaurant_phone
 * @property string $contact_name
 * @property string $contact_phone
 * @property string $contact_email
 * @property string $country_code
 * @property string|null $street
 * @property string $city
 * @property string $state
 * @property string $post_code
 * @property string|null $cuisine
 * @property string $service
 * @property int $free_delivery
 * @property string $delivery_estimation
 * @property string $username
 * @property string $password
 * @property string $activation_key
 * @property string $activation_token
 * @property string $status
 * @property string $date_created
 * @property string $date_modified
 * @property string $date_activated
 * @property string $last_login
 * @property string $ip_address
 * @property int $package_id
 * @property float $package_price
 * @property string|null $membership_expired
 * @property int $payment_steps
 * @property int $is_featured
 * @property int $is_ready
 * @property int $is_sponsored
 * @property string|null $sponsored_expiration
 * @property string $lost_password_code
 * @property int $user_lang
 * @property string $membership_purchase_date
 * @property int $sort_featured
 * @property int $is_commission
 * @property float $percent_commision
 * @property string $abn
 * @property string $session_token
 * @property string $commision_type
 * @property string $mobile_session_token
 * @property string $merchant_key
 * @property string $latitude
 * @property string $lontitude
 * @property float $delivery_charges
 * @property float $minimum_order
 * @property float $delivery_minimum_order
 * @property float $delivery_maximum_order
 * @property float $pickup_minimum_order
 * @property float $pickup_maximum_order
 * @property string $country_name
 * @property int $country_id
 * @property int $state_id
 * @property int $city_id
 * @property int $area_id
 * @property string $logo
 * @property int $merchant_type
 * @property int $invoice_terms
 * @property string $payment_gateway_ref
 * @property string|null $user_access
 * @property string $distance_unit
 * @property float $delivery_distance_covered
 */
class Merchant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%merchant}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['street', 'cuisine', 'user_access'], 'string'],
            [['free_delivery', 'package_id', 'payment_steps', 'is_featured', 'is_ready', 'is_sponsored', 'user_lang', 'sort_featured', 'is_commission', 'country_id', 'state_id', 'city_id', 'area_id', 'merchant_type', 'invoice_terms'], 'integer'],
            [['date_created', 'date_modified', 'date_activated', 'last_login', 'membership_expired', 'sponsored_expiration', 'membership_purchase_date'], 'safe'],
            [['package_price', 'percent_commision', 'delivery_charges', 'minimum_order', 'delivery_minimum_order', 'delivery_maximum_order', 'pickup_minimum_order', 'pickup_maximum_order', 'delivery_distance_covered'], 'number'],
            [['restaurant_slug', 'restaurant_name', 'contact_name', 'contact_email', 'city', 'state', 'service', 'activation_token', 'abn', 'session_token', 'mobile_session_token', 'merchant_key', 'country_name', 'logo', 'payment_gateway_ref'], 'string', 'max' => 255],
            [['restaurant_phone', 'contact_phone', 'post_code', 'delivery_estimation', 'username', 'password', 'status'], 'string', 'max' => 100],
            [['country_code'], 'string', 'max' => 3],
            [['activation_key', 'ip_address', 'lost_password_code', 'commision_type', 'latitude', 'lontitude'], 'string', 'max' => 50],
            [['distance_unit'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'merchant_id' => Yii::t('app', 'Merchant ID'),
            'restaurant_slug' => Yii::t('app', 'Restaurant Slug'),
            'restaurant_name' => Yii::t('app', 'Restaurant Name'),
            'restaurant_phone' => Yii::t('app', 'Restaurant Phone'),
            'contact_name' => Yii::t('app', 'Contact Name'),
            'contact_phone' => Yii::t('app', 'Contact Phone'),
            'contact_email' => Yii::t('app', 'Contact Email'),
            'country_code' => Yii::t('app', 'Country Code'),
            'street' => Yii::t('app', 'Street'),
            'city' => Yii::t('app', 'City'),
            'state' => Yii::t('app', 'State'),
            'post_code' => Yii::t('app', 'Post Code'),
            'cuisine' => Yii::t('app', 'Cuisine'),
            'service' => Yii::t('app', 'Service'),
            'free_delivery' => Yii::t('app', 'Free Delivery'),
            'delivery_estimation' => Yii::t('app', 'Delivery Estimation'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'activation_key' => Yii::t('app', 'Activation Key'),
            'activation_token' => Yii::t('app', 'Activation Token'),
            'status' => Yii::t('app', 'Status'),
            'date_created' => Yii::t('app', 'Date Created'),
            'date_modified' => Yii::t('app', 'Date Modified'),
            'date_activated' => Yii::t('app', 'Date Activated'),
            'last_login' => Yii::t('app', 'Last Login'),
            'ip_address' => Yii::t('app', 'Ip Address'),
            'package_id' => Yii::t('app', 'Package ID'),
            'package_price' => Yii::t('app', 'Package Price'),
            'membership_expired' => Yii::t('app', 'Membership Expired'),
            'payment_steps' => Yii::t('app', 'Payment Steps'),
            'is_featured' => Yii::t('app', 'Is Featured'),
            'is_ready' => Yii::t('app', 'Is Ready'),
            'is_sponsored' => Yii::t('app', 'Is Sponsored'),
            'sponsored_expiration' => Yii::t('app', 'Sponsored Expiration'),
            'lost_password_code' => Yii::t('app', 'Lost Password Code'),
            'user_lang' => Yii::t('app', 'User Lang'),
            'membership_purchase_date' => Yii::t('app', 'Membership Purchase Date'),
            'sort_featured' => Yii::t('app', 'Sort Featured'),
            'is_commission' => Yii::t('app', 'Is Commission'),
            'percent_commision' => Yii::t('app', 'Percent Commision'),
            'abn' => Yii::t('app', 'Abn'),
            'session_token' => Yii::t('app', 'Session Token'),
            'commision_type' => Yii::t('app', 'Commision Type'),
            'mobile_session_token' => Yii::t('app', 'Mobile Session Token'),
            'merchant_key' => Yii::t('app', 'Merchant Key'),
            'latitude' => Yii::t('app', 'Latitude'),
            'lontitude' => Yii::t('app', 'Lontitude'),
            'delivery_charges' => Yii::t('app', 'Delivery Charges'),
            'minimum_order' => Yii::t('app', 'Minimum Order'),
            'delivery_minimum_order' => Yii::t('app', 'Delivery Minimum Order'),
            'delivery_maximum_order' => Yii::t('app', 'Delivery Maximum Order'),
            'pickup_minimum_order' => Yii::t('app', 'Pickup Minimum Order'),
            'pickup_maximum_order' => Yii::t('app', 'Pickup Maximum Order'),
            'country_name' => Yii::t('app', 'Country Name'),
            'country_id' => Yii::t('app', 'Country ID'),
            'state_id' => Yii::t('app', 'State ID'),
            'city_id' => Yii::t('app', 'City ID'),
            'area_id' => Yii::t('app', 'Area ID'),
            'logo' => Yii::t('app', 'Logo'),
            'merchant_type' => Yii::t('app', 'Merchant Type'),
            'invoice_terms' => Yii::t('app', 'Invoice Terms'),
            'payment_gateway_ref' => Yii::t('app', 'Payment Gateway Ref'),
            'user_access' => Yii::t('app', 'User Access'),
            'distance_unit' => Yii::t('app', 'Distance Unit'),
            'delivery_distance_covered' => Yii::t('app', 'Delivery Distance Covered'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return MerchantQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MerchantQuery(get_called_class());
    }
}

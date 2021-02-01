<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Merchant */

$this->title = $model->merchant_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Merchants'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="merchant-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->merchant_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->merchant_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'merchant_id',
            'restaurant_slug',
            'restaurant_name',
            'restaurant_phone',
            'contact_name',
            'contact_phone',
            'contact_email:email',
            'country_code',
            'street:ntext',
            'city',
            'state',
            'post_code',
            'cuisine:ntext',
            'service',
            'free_delivery',
            'delivery_estimation',
            'username',
            'password',
            'activation_key',
            'activation_token',
            'status',
            'date_created',
            'date_modified',
            'date_activated',
            'last_login',
            'ip_address',
            'package_id',
            'package_price',
            'membership_expired',
            'payment_steps',
            'is_featured',
            'is_ready',
            'is_sponsored',
            'sponsored_expiration',
            'lost_password_code',
            'user_lang',
            'membership_purchase_date',
            'sort_featured',
            'is_commission',
            'percent_commision',
            'abn',
            'session_token',
            'commision_type',
            'mobile_session_token',
            'merchant_key',
            'latitude',
            'lontitude',
            'delivery_charges',
            'minimum_order',
            'delivery_minimum_order',
            'delivery_maximum_order',
            'pickup_minimum_order',
            'pickup_maximum_order',
            'country_name',
            'country_id',
            'state_id',
            'city_id',
            'area_id',
            'logo',
            'merchant_type',
            'invoice_terms',
            'payment_gateway_ref',
            'user_access:ntext',
            'distance_unit',
            'delivery_distance_covered',
        ],
    ]) ?>

</div>

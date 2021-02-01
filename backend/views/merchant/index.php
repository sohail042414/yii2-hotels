<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchMerchant */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Merchants');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="merchant-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Merchant'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'merchant_id',
            'restaurant_slug',
            'restaurant_name',
            'restaurant_phone',
            'contact_name',
            //'contact_phone',
            //'contact_email:email',
            //'country_code',
            //'street:ntext',
            //'city',
            //'state',
            //'post_code',
            //'cuisine:ntext',
            //'service',
            //'free_delivery',
            //'delivery_estimation',
            //'username',
            //'password',
            //'activation_key',
            //'activation_token',
            //'status',
            //'date_created',
            //'date_modified',
            //'date_activated',
            //'last_login',
            //'ip_address',
            //'package_id',
            //'package_price',
            //'membership_expired',
            //'payment_steps',
            //'is_featured',
            //'is_ready',
            //'is_sponsored',
            //'sponsored_expiration',
            //'lost_password_code',
            //'user_lang',
            //'membership_purchase_date',
            //'sort_featured',
            //'is_commission',
            //'percent_commision',
            //'abn',
            //'session_token',
            //'commision_type',
            //'mobile_session_token',
            //'merchant_key',
            //'latitude',
            //'lontitude',
            //'delivery_charges',
            //'minimum_order',
            //'delivery_minimum_order',
            //'delivery_maximum_order',
            //'pickup_minimum_order',
            //'pickup_maximum_order',
            //'country_name',
            //'country_id',
            //'state_id',
            //'city_id',
            //'area_id',
            //'logo',
            //'merchant_type',
            //'invoice_terms',
            //'payment_gateway_ref',
            //'user_access:ntext',
            //'distance_unit',
            //'delivery_distance_covered',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>

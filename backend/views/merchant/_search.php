<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchMerchant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="merchant-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'merchant_id') ?>

    <?= $form->field($model, 'restaurant_slug') ?>

    <?= $form->field($model, 'restaurant_name') ?>

    <?= $form->field($model, 'restaurant_phone') ?>

    <?= $form->field($model, 'contact_name') ?>

    <?php // echo $form->field($model, 'contact_phone') ?>

    <?php // echo $form->field($model, 'contact_email') ?>

    <?php // echo $form->field($model, 'country_code') ?>

    <?php // echo $form->field($model, 'street') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'state') ?>

    <?php // echo $form->field($model, 'post_code') ?>

    <?php // echo $form->field($model, 'cuisine') ?>

    <?php // echo $form->field($model, 'service') ?>

    <?php // echo $form->field($model, 'free_delivery') ?>

    <?php // echo $form->field($model, 'delivery_estimation') ?>

    <?php // echo $form->field($model, 'username') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'activation_key') ?>

    <?php // echo $form->field($model, 'activation_token') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'date_created') ?>

    <?php // echo $form->field($model, 'date_modified') ?>

    <?php // echo $form->field($model, 'date_activated') ?>

    <?php // echo $form->field($model, 'last_login') ?>

    <?php // echo $form->field($model, 'ip_address') ?>

    <?php // echo $form->field($model, 'package_id') ?>

    <?php // echo $form->field($model, 'package_price') ?>

    <?php // echo $form->field($model, 'membership_expired') ?>

    <?php // echo $form->field($model, 'payment_steps') ?>

    <?php // echo $form->field($model, 'is_featured') ?>

    <?php // echo $form->field($model, 'is_ready') ?>

    <?php // echo $form->field($model, 'is_sponsored') ?>

    <?php // echo $form->field($model, 'sponsored_expiration') ?>

    <?php // echo $form->field($model, 'lost_password_code') ?>

    <?php // echo $form->field($model, 'user_lang') ?>

    <?php // echo $form->field($model, 'membership_purchase_date') ?>

    <?php // echo $form->field($model, 'sort_featured') ?>

    <?php // echo $form->field($model, 'is_commission') ?>

    <?php // echo $form->field($model, 'percent_commision') ?>

    <?php // echo $form->field($model, 'abn') ?>

    <?php // echo $form->field($model, 'session_token') ?>

    <?php // echo $form->field($model, 'commision_type') ?>

    <?php // echo $form->field($model, 'mobile_session_token') ?>

    <?php // echo $form->field($model, 'merchant_key') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'lontitude') ?>

    <?php // echo $form->field($model, 'delivery_charges') ?>

    <?php // echo $form->field($model, 'minimum_order') ?>

    <?php // echo $form->field($model, 'delivery_minimum_order') ?>

    <?php // echo $form->field($model, 'delivery_maximum_order') ?>

    <?php // echo $form->field($model, 'pickup_minimum_order') ?>

    <?php // echo $form->field($model, 'pickup_maximum_order') ?>

    <?php // echo $form->field($model, 'country_name') ?>

    <?php // echo $form->field($model, 'country_id') ?>

    <?php // echo $form->field($model, 'state_id') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'area_id') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'merchant_type') ?>

    <?php // echo $form->field($model, 'invoice_terms') ?>

    <?php // echo $form->field($model, 'payment_gateway_ref') ?>

    <?php // echo $form->field($model, 'user_access') ?>

    <?php // echo $form->field($model, 'distance_unit') ?>

    <?php // echo $form->field($model, 'delivery_distance_covered') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

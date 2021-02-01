<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Merchant */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="merchant-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'restaurant_slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'restaurant_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'restaurant_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cuisine')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'service')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'free_delivery')->textInput() ?>

    <?= $form->field($model, 'delivery_estimation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activation_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activation_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'date_modified')->textInput() ?>

    <?= $form->field($model, 'date_activated')->textInput() ?>

    <?= $form->field($model, 'last_login')->textInput() ?>

    <?= $form->field($model, 'ip_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'package_id')->textInput() ?>

    <?= $form->field($model, 'package_price')->textInput() ?>

    <?= $form->field($model, 'membership_expired')->textInput() ?>

    <?= $form->field($model, 'payment_steps')->textInput() ?>

    <?= $form->field($model, 'is_featured')->textInput() ?>

    <?= $form->field($model, 'is_ready')->textInput() ?>

    <?= $form->field($model, 'is_sponsored')->textInput() ?>

    <?= $form->field($model, 'sponsored_expiration')->textInput() ?>

    <?= $form->field($model, 'lost_password_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_lang')->textInput() ?>

    <?= $form->field($model, 'membership_purchase_date')->textInput() ?>

    <?= $form->field($model, 'sort_featured')->textInput() ?>

    <?= $form->field($model, 'is_commission')->textInput() ?>

    <?= $form->field($model, 'percent_commision')->textInput() ?>

    <?= $form->field($model, 'abn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'session_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'commision_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile_session_token')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'merchant_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lontitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delivery_charges')->textInput() ?>

    <?= $form->field($model, 'minimum_order')->textInput() ?>

    <?= $form->field($model, 'delivery_minimum_order')->textInput() ?>

    <?= $form->field($model, 'delivery_maximum_order')->textInput() ?>

    <?= $form->field($model, 'pickup_minimum_order')->textInput() ?>

    <?= $form->field($model, 'pickup_maximum_order')->textInput() ?>

    <?= $form->field($model, 'country_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_id')->textInput() ?>

    <?= $form->field($model, 'state_id')->textInput() ?>

    <?= $form->field($model, 'city_id')->textInput() ?>

    <?= $form->field($model, 'area_id')->textInput() ?>

    <?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'merchant_type')->textInput() ?>

    <?= $form->field($model, 'invoice_terms')->textInput() ?>

    <?= $form->field($model, 'payment_gateway_ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_access')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'distance_unit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delivery_distance_covered')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Package */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="package-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'promo_price')->textInput() ?>

    <?= $form->field($model, 'expiration_type')->dropDownList($model->expirationTypeList()) ?>

    <?= $form->field($model, 'expiration')->textInput() ?>

    <?= $form->field($model, 'unlimited_post')->dropDownList($model->usageList()) ?>    

    <?= $form->field($model, 'post_limit')->textInput() ?>

    <?= $form->field($model, 'sell_limit')->textInput() ?>

    <?= $form->field($model, 'sequence')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList($model->statusList()) ?>   
    <?php /* ?>
    <?= $form->field($model, 'date_created')->textInput() ?>

    <?= $form->field($model, 'date_modified')->textInput() ?>

    <?= $form->field($model, 'ip_address')->textInput(['maxlength' => true]) ?>
    <?php */ ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

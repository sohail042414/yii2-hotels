<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchOrderStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-status-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'stats_id') ?>

    <?= $form->field($model, 'merchant_id') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'date_created') ?>

    <?= $form->field($model, 'date_modified') ?>

    <?php // echo $form->field($model, 'ip_address') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

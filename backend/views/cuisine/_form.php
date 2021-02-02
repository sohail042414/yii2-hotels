<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Cuisine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuisine-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'cuisine_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sequence')->textInput() ?>
    <?php /*imageFile is holding featured image. */?>
    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?php /* ?>
    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'cuisine_name_trans')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'date_created')->textInput() ?>
    <?= $form->field($model, 'date_modified')->textInput() ?>
    <?php  */?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

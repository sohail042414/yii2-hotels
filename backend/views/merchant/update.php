<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Merchant */

$this->title = Yii::t('app', 'Update Merchant: {name}', [
    'name' => $model->merchant_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Merchants'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->merchant_id, 'url' => ['view', 'id' => $model->merchant_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="merchant-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

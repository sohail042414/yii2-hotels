<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OrderStatus */

$this->title = Yii::t('app', 'Update Order Status: {name}', [
    'name' => $model->stats_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Order Statuses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->stats_id, 'url' => ['view', 'id' => $model->stats_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="order-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

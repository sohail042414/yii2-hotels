<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Package */

$this->title = Yii::t('app', 'Update Package: {name}', [
    'name' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Packages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->package_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="package-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

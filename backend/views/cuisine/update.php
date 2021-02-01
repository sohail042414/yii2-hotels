<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Cuisine */

$this->title = Yii::t('app', 'Update Cuisine: {name}', [
    'name' => $model->cuisine_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cuisines'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cuisine_id, 'url' => ['view', 'id' => $model->cuisine_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cuisine-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

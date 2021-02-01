<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dish */

$this->title = Yii::t('app', 'Update Dish: {name}', [
    'name' => $model->dish_id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dishes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dish_id, 'url' => ['view', 'id' => $model->dish_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="dish-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

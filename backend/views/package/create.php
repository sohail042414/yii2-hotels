<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Package */

$this->title = Yii::t('app', 'Create Package');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Packages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="package-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Cuisine */

$this->title = $model->cuisine_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cuisines'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cuisine-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->cuisine_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->cuisine_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cuisine_id',
            'cuisine_name',
            'sequence',
            'status',
            //'featured_image',
            [
                'attribute'=>'featured_image',
                'value'=>(!empty($model->featured_image) ? \Yii::$app->request->BaseUrl.'uploads/'.$model->featured_image : \Yii::$app->request->BaseUrl.'uploads/no-image.jpg'),
                'format' => ['image',['width'=>'100','height'=>'100']],
            ],
            // 'date_created',
            // 'date_modified',
            // 'ip_address',
            // 'cuisine_name_trans:ntext',
            // 'slug',
        ],
    ]) ?>

</div>

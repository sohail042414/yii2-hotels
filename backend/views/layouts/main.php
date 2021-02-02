<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container" >
        <div class="row">
            <div class="col-md-2 col-lg-2 col-sm-12">
            <div class="row" style="height:70px;">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <h2>Operations</h2>
                </div>
            </div>
            <?= Nav::widget([
                'options' => ['class' => 'nav-pills nav-stacked'],
                    'items' =>  [
                        ['label' => 'Dashboard', 'url' => ['/site/index']],             
                        ['label' => 'Merchant List', 'url' => ['/merchant']],   
                        ['label' => 'Sponsord Listing', 'url' => ['/merchant/sponsored']],   
                        ['label' => 'Packages', 'url' => ['/package']],   
                        ['label' => 'Cusines', 'url' => ['/cuisine']],   
                        ['label' => 'Dishes', 'url' => ['/dish']],                        
                        ['label' => 'Order Status', 'url' => ['/order-status']],   
                        ['label' => 'Tags', 'url' => ['/tag']],   
                        ['label' => 'All Orders', 'url' => ['/cuisine']],                          
                        ['label' => 'New Cancel Orders', 'url' => ['/cuisine']],                          ['label' => 'All Orders', 'url' => ['/cuisine']],  
                        ['label' => 'Settings', 'url' => ['/cuisine']],  
                        ['label' => 'All Orders', 'url' => ['/cuisine']],  
                        ['label' => 'Theme Settings', 'url' => ['/cuisine']],  
                        ['label' => 'Manage Locations', 'url' => ['/cuisine']],  
                        ['label' => 'Commission Settings', 'url' => ['/cuisine']],  
                        ['label' => 'Vouchers', 'url' => ['/cuisine']],  
                        ['label' => 'Invoices', 'url' => ['/cuisine']],  
                        ['label' => 'Merchant Commission', 'url' => ['/cuisine']],  
                        ['label' => 'Withdrawl', 'url' => ['/cuisine']],  
                        ['label' => 'Email Settingss', 'url' => ['/cuisine']],  
                        ['label' => 'All Orders', 'url' => ['/cuisine']],  
                        ['label' => 'All Orders', 'url' => ['/cuisine']],  
                        ['label' => 'All Orders', 'url' => ['/cuisine']],  

                    ],
                ]); 
                ?>
            </div>
            <div class="col-md-10 col-lg-10 col-sm-12">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

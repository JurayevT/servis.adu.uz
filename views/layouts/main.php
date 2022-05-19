<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
    <title>IT sohasidagi sifatli mahsulotlar</title>
    <link rel="stylesheet" href="../../web/css/site.css">
<style>
    /* @media screen and (max-width = ) {
        
    } */
</style>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="row d-flex align-items-center" style="justify-content: space-between;">
        <div class="col-3 col-md-2">
            <a href="http://adu.uz" target="blank">
                <img src="../../web/img/adu.png" id="logoADU" class="w-100 p-1" alt="ADU logo">
            </a>
        </div>
        <div class="col-6">
            <div class="text-center text-uppercase">
                <p style="font-family: Arial, Helvetica, sans-serif;
                            font-size: 3vw;
                            font-weight: 530;
                            word-spacing: 7px;
                            letter-spacing: 4px;
                            margin-bottom: .5rem;
                            ">
                            Andijon Davlat Universiteti</p>
                <p style="font-family: Arial, Helvetica, sans-serif;
                            font-size: 1.8vw;
                            margin-top: 0;
                            font-weight: 530;
                            word-spacing: 3px;
                            letter-spacing: 1.6px;
                            text-shadow: 0 2px 4px rgba(0, 0, 0, .4);
                            ">
                            Raqamli ta'lim texnologiyalari markazi</p>
            </div>
        </div>
        <div class="col-3 col-md-2">
            <a href="https://it-park.uz/" target="blank">
                <img src="../../web/img/ITPark.png" id="logoIT" class="w-100 p-1" alt="IT-Park logo">
            </a>
        </div>
    </div>
    
    
    <?php
    NavBar::begin([
        'brandLabel'=>'IT Servis',
        'brandUrl' => '/site/index',
        'brandOptions' => [
            'style' => '
                font-style: Arial;
                font-weight: 600;
                font-size: 32px;
            '
        ],
        'options' => [
            'class' => 'navbar navbar-expand-lg bg-primary navbar-dark sticky-top shadow',

        ],
    ]);

    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav ml-auto d-flex align-items-center', 'style' => 'font-size: 20px;'],
        'items' => [
            // ['label' => 'Asosiy', 'url' => ['/site/index']],
            ['label' => 'Bosh sahifa','url' =>['/site/index']],
            ['label' => 'Xizmatlar','url' =>['/matnuz/index']],
            ['label' => 'Mahsulotlar','url' =>['/matnru/index']],
            ['label' => 'Bizning jamoa','url' =>['/site/about']],
            ['label' => 'Aloqa', 'url' => ['/site/contact'],
                'linkOptions' => [
                    'class' => 'd-inline-block py-2 px-3 ml-1 aloqa bg-light rounded-pill text-primary'
                ]
            ],
            Yii::$app->user->isGuest ? (
                ['label' => 'Kirish', 'url' => ['/site/login'],
                'linkOptions' => [
                    'class' => 'd-none'
                ]
            ]
            ) : ([
                'label' => 'Chiqish (' . Yii::$app->user->identity->username . ')',
                'url' => '/site/logout',
                'linkOptions' => [
                    'data-method' => 'post'
                ]
            ])
        ],
    ]);

    NavBar::end();
    ?>

    <div class="container-fluid">
        <!-- <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?> -->
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer bg-default h-auto py-3">
    <div class="container-fluid">
        <div class="row m-0 p-0 mt-5">
            <div class="col-md-4 pr-2 mt-2 pb-5">
                <h3 class="text-dark d-flex mb-4">
                    Arzon va sifatli dasturiy mahsulotlarga hoziroq ega bo'ling!
                </h3>
                <div class="col-5 mx-auto pt-3">
                    <ul class="social-icon d-flex justify-content-around p-0 m-0" style="list-style-type: none; font-size: 1.5rem">
                        <li>
                            <a href="http://www.instagram.com/aduuzb" target="_blank">
                                <i class="fab fa-instagram" style="color: #bc2a8d;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://t.me/adu_uz_bot" target="_blank">
                                <i class="fab fa-telegram" style="color: #0088CC;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/c/aduuz" target="_blank">
                                <i class="fab fa-youtube" style="color: #c4302b;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.fb.com/andsu.uz" target="_blank">
                                <i class="fab fa-facebook-square" style="color: #3b5998;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 py-3">
                <div>
                    <h4 class="ml-2">Manzil:</h4>
                    <div class="ml-2 d-flex">
                        <i class="fas fa-map-marker-alt mr-3 mt-2" style="color: seagreen;"></i>
                        <p class="text-muted mr-4">170100, O'zbekiston Respublikasi, Andijon shahar, Universitet ko'chasi 129-uy.</p>
                    </div>
                </div>
                
            </div>
            <div class="col-md-3 py-3 d-flex flex-column">
                <h4 class="text-shadow">Biz bilan bog'lanish:</h4>
                <ul class="p-0 mt-2" style="list-style-type: none;">
                    <li class="text-muted m-1"><i class="fas fa-lg fa-phone-square mr-2" style="color: seagreen;"></i>+998 90 548 14 17</li>
                    <li class="text-muted m-1"><i class="fas fa-lg fa-envelope-square mr-2" style="color: seagreen;"></i>aduinkubatsiya@gmail.com</li>
                    <li class="text-muted m-1"><i class="fas fa-lg fa-globe mr-2" style="color: seagreen;"></i><a href="http://incubation.adu.uz/" style="color:inherit; font-style: italic">http://incubation.adu.uz</a></li>
                </ul>
            </div>
            
        </div>
    </div>

        <div class="container-fluid">
                <div class="google-map w-100" data-aos="zoom-in">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1510.4062474060947!2d72.37209355915574!3d40.78813619113242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bcec8187a14f81%3A0x82b53c72a937651f!2sAndijon%20Davlat%20Universiteti!5e0!3m2!1suz!2s!4v1629279931423!5m2!1suz!2s" width="100%" height="450" style="border:0;"  loading="lazy"></iframe>
                </div>
            </div>

        <!-- <p class="pull-left container">
           &copy;
            Andijon 2019-<?= date('Y') ?></p> -->

       <p class="pull-right"><?php //Yii::powered() ?></p>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

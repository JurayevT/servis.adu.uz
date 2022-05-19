<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MultfilmruSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = "Xizmatlar";
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matnuz-index container py-5">

    <p class="h2 text-primary text-shadow"><?= Html::encode($this->title) ?></p>
    <p>
        <?php
        if (!(Yii::$app->user->isGuest)) {
            echo Html::a("Xizmat qo'shish", ['create'], ['class' => 'btn btn-success']);
        }?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
        <!-- <details> -->
    <!--    <summary style="cursor:pointer;background-color: green;color: #ffffff">Saralash bo'limi</summary>-->
    <div class="d-flex align-items-center mb-3">
        <p class="mx-1 h4 text-primary">
            <?php echo "Tartiblash: |";?>
        </p>
        <p class="mx-1 h5 text-primary">
            <?php echo $dataProvider->sort->link('sarlavha')." |";?>
        </p>
        <p class="mx-1 h5 text-primary">
            <?php echo $dataProvider->sort->link('kurish')." |";?>
        </p>
        
    </div>
    
    <!--    </details>-->

    <?php
    if (!(Yii::$app->user->isGuest)) {
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'rasm',
                'sarlavha',
                'matn',
                'kurish',
//                'star',
//                'insert',
                'update',
                [
                    'class' => 'yii\grid\ActionColumn',
                    'buttons' => [
                        'view' => function ($url, $model)
                        {
                            return Html::a(
                                '<i class="fas fa-eye mr-1"></i>',
                                 $url
                            );
                        },
                        'update' => function ($url, $model)
                        {
                            return Html::a(
                                '<i class="fas fa-pen mr-1"></i>',
                                 $url
                            );
                        },
                        'delete' => function ($url, $model)
                        {
                            return Html::a(
                                '<i class="far fa-trash-alt"></i>',
                                 $url,
                                 [
                                    'data-method' => 'post'
                                ]
                            );
                        }
                    ],
                    'contentOptions' =>['class' => 'd-flex align-item-center'],
                ]
            ],
        ]);
    }
    ?>


        <?=ListView::widget([
            'dataProvider' => $dataProvider,
            'itemOptions' => ['class'=>'p-0 mb-2 col-md-6 col-lg-4'],
            'itemView' =>'_list',
            'summaryOptions' =>['class' => 'col-12 d-none'],
            // 'summary'=>'<!--&nbsp;&nbsp;&nbsp;Ko\'rsatish uchun <b>{totalCount}</b> ta ma\'lumot topildi -->',
            'pager'=>[
                'class' => \yii\bootstrap4\LinkPager::class,
                'options' =>['class' => 'col-12 mt-2'], 
                // 'firstPageLabel'=>'Birinchi',
                // 'lastPageLabel'=>'Oxirgi',
                // 'nextPageLabel'=>'Keyingisi',
                // 'prevPageLabel'=>'Oldingisi',
                'maxButtonCount'=>10,
            ],
            // 'layout' => "{summary}\n{items}\n{pager}\n",
            'options' => ['class' => 'row']
        ])
        ?>
</div>

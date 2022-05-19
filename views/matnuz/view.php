<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Matnuz */

// $this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Matnuzs', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="matnuz-view container py-5">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <p>
        <?php
        if (!(Yii::$app->user->isGuest)) {

             echo Html::a("Qaytish", ['index', 'id' => $model->id], ['class' => 'btn btn-primary mx-1']);
             echo Html::a("O'zgartirish", ['update', 'id' => $model->id], ['class' => 'btn btn-primary mx-1']);
             echo Html::a("O'chirish", ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger mx-1',
                'data' => [
                    'confirm' => "Siz rostdan ham ushbu yozuvni o'chirmoqchimisiz?",
                    'method' => 'post',
                ],
            ]);
        }
        ?>
    </p>

<?php

$sImageFilePath=Url::to(['/img/'.$model->rasm]);

echo "<div class='card w-100' style='width: 18rem;'>
  <img class='card-img-top' src='".$sImageFilePath."' alt='Card image cap'>
  <div class='card-body'>
    <h5 class='card-title h2 text-center my-2'>".$model->sarlavha."</h5>
    <p class='card-text py-2' style='font-family: Arial;'>".$model->izoh."</p>
    
        <div class='mb-3' style='text-align: center;
                                font-size: 3vw;
                                color: #3b5998;
                                font-weight: 600;
                                text-shadow: 0 0 10px rgba(150, 150, 150, 0.5)'>
            ". $model->matn ."
        </div>
    
    <div class='text-muted mt-2'>
        <p style='float:left; text-shadow: 0 0 10px rgba(150, 150, 180, 0.6)'>
            Ko'rishlar soni: " .(string)$model->kurish .
        "</p>
        <p style='float:right; text-shadow: 0 0 10px rgba(150, 150, 180, 0.6)'>
            Post qo'yilgan sana: " . Yii::$app->formatter->asDate($model->insert) .
        "</p>
    </div>
  </div>
</div>";

?>
</div>

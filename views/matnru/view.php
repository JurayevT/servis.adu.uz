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
    <p class='card-text'>".$model->izoh."</p>
    <div class='text-muted mt-2'>
        <p style='float:left;'>
            Ko'rishlar soni: " .(string)$model->kurish .
        "</p>
        <p style='float:right;'>
            Post qo'yilgan sana: " . Yii::$app->formatter->asDate($model->insert) .
        "</p>
    </div>
  </div>
</div>";

?>
</div>

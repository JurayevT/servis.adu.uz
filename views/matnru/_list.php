<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Matnuz */
/* @var $form yii\widgets\ActiveForm */


$file='';
if(file_exists('img/'.$model->rasm))
{
    if(!empty($model->rasm))
        $file=$model->rasm;
}
$sImageFilePath=Url::to(['/img/'.$file]);
echo "<div class='card mx-1 m-0 mt-5 shadow'>
  <img class='card-img-top m-0' src='".$sImageFilePath."' alt='Card image cap' style='height: 200px'>
  <div class='card-body'>
    <h5 class='card-title'>".$model->sarlavha."</h5>
    <p class='card-text text-muted mb-4'>".$model->matn."</p>
    <a href='#' class='btn btn-primary' onclick = 'window.open(".'"'.'/matnru/vieww/?id=' .$model->id.'","_blank");window.location.reload()'."'>Batafsil</a>
    <div style='float:right; color:green; font-size:1.2rem;'><i class='fa fa-eye mr-1'></i>". $model->kurish ."</div>
  </div>
</div>
";  

// $width=270;
// $height=240;
// $mode="outbound";
// $quality=50;
// $chosenFileName=$file;

// echo '<div class="col-sm-6 col-md-4">';
// echo '<div class="thumbnail" style="text-align: center">';
// if(!empty($file)){
// echo Html::img($sImageFilePath,['class' => 'img-responsive', 'width' => $width, 'height' => $height]);
//     // echo '<img src="'.\Yii::$app->imageresize->getUrl($sImageFilePath,$width,$height,$mode,$quality,$chosenFileName).'" alt="Rasm yuklanmadi" class="img-responsive">';
    
// } 
// echo '<h3>' . $model->sarlavha.'</h3>';
// echo '<p>' . $model->matn.'</p>';
//     echo ' Ko`rishlar soni: ' .(string)$model->kurish;
//     echo '<br>'."So'ngi marta ko'rilgan vaqti: ".$model->update. '<br>';
//     echo '<a href="/web/index.php?r=matnuz%2Fview&id='.$model->id.'" class="btn btn-primary" role="button">Batafsil</a></p>
//     </div></div>';
?>
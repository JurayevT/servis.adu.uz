<?php

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Matnuz */
/* @var $form yii\widgets\ActiveForm */
// echo "<pre>";
// print_r($model);exit;

/*
 * $sImageFilePath_id: (required) path to file
 * $width/$height: (required) width height of the image
 * $mode: "outbound", "inset" or "{horz}:{vert}" where {horz} is one from "left", "cetrer", "right" and {vert} is one from "top", "center", "bottom"
 * $$quality: (1 - 100)
 * $chosenFileName: if config -> components -> imageresize -> useFilename is true? its an option to give a custom name else use original file name

//Yii::$app->imageresize->getUrl($sImageFilePath, $width, $height, $mode, $quality, $chosenFileName);
*/

$file='';
// echo "<pre>";
// print_r(Url::to(['/img/'.$model->rasm]));exit;
if(file_exists('img/'.$model->rasm))
{
    // echo "ss";exit;
    if(!empty($model->rasm))
        $file=$model->rasm;
}
$sImageFilePath=Url::to(['/img/'.$file]);
echo "
  <div class='card mx-1 mt-2 shadow'>
  <img class='card-img-top' src='".$sImageFilePath."' alt='Card image cap' style='height: 200px'>
  <div class='card-body'>
    <h5 class='card-title'>".$model->sarlavha."</h5>
    <p class='card-text text-muted mb-4'>".$model->matn."</p>
    <a href='". '/matnuz/view/?id=' .$model->id."' class='btn btn-primary'>Batafsil</a>
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
<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Matnru */

$this->title = "Ma'lumotlar";
//$this->params['breadcrumbs'][] = ['label' => 'Matnrus', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matnru-create container mb-0 py-5">

    <h1 class="mb-5 mt-2"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

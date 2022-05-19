<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Matnuz */


//$this->title = 'Create Matnuz';
///$this->params['breadcrumbs'][] = ['label' => 'Matnuzs', 'url' => ['index']];
///$this->params['breadcrumbs'][] = $this->title;
$this->title = "Ma'lumotlar";
?>
<div class="matnuz-create container py-5">
    <h1 class="my-3"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

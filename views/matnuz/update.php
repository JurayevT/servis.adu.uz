<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Matnuz */

$this->title = "O'zgartirish: " . $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Matnuzs', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
//$this->params['breadcrumbs'][] = 'Update';
?>
<div class="matnuz-update container py-5">

    <h1 class="mb-3"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

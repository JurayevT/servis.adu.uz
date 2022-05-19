<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MatnuzSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matnuz-search container">

    
    <div class="form-group">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row d-flex" style="flex-wrap: nowrap;">
        <div class="col-md-10 m-0 p-0 pr-2">
            <?= $form->field($model, 'sarlavha')->label('') ?>
        </div>
        <div class="col-md-2 m-0 p-0 pt-4 d-flex">
            <p class="p-0 m-0">
                <?= Html::submitButton('Qidirish', ['class' => 'btn btn-primary']) ?>
            </p>
            <p class="p-0 m-0">
                <?= Html::resetButton('Tozalash', ['class' => 'btn btn-outline-secondary']) ?>
            </p>
        </div>
    </div>
    
    </div>

    <?php ActiveForm::end(); ?>

</div>

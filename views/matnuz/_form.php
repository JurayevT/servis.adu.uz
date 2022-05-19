<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Matnuz */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matnuz-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'rasm')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sarlavha')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'matn')->textInput() ?>

    <?= $form->field($model, 'izoh')->textarea(['rows' => 6]) ?>

        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>

</div>

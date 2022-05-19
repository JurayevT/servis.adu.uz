<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
?>
<div class="site-login d-flex flex-column align-items-center">
    <h2 class="mt-3 mb-5">Admin qismiga kirish:</h2>

<!--    <p>Please fill out the following fields to login:</p>-->

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => '<div class="col-3">{label}</div><div class="col-8\">{input}</div>',
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ]
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('login') ?>

        <?= $form->field($model, 'password')->passwordInput()->label('parol') ?>

        <?= $form->field($model, 'rememberMe')->checkbox()->label('Parolni eslab qolishi') ?>

        <div class="form-group text-center">
                <?= Html::submitButton('Tasdiqlash  ', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>

    <?php ActiveForm::end(); ?>

<!--
    <div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>
-->
</div>

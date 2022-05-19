<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Biz bilan aloqa';
?>
<div class="container py-5">
    <div class="header">
        <h1 class="text-center my-3"><?= Html::encode($this->title) ?></h1>

        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success py-3 px-2 mx-auto" style="text-indent: 30px; font-size:1.2rem;">
            Biz bilan bog'langaningiz uchun katta raxmat. Tez orada sizga javob yozishga harakat qilamiz.
        </div>

        <!-- <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
            
        </p> -->

            <?php else: ?>

        <div class="py-3 text-muted mx-auto" style="text-indent: 30px; font-size:1.2rem">
            Agar bizga xabar yubormoqchi bo'lsangiz kerakli ma'lumotlarni to'ldiring va "Jo'natish" tugmasini bosing.
            Biz bilan bog'langaningiz uchun oldindan rahmat!
        </div>
    </div>
    

        <div class="row m-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'contact-form', 
                    'options' => [
                        'class' => 'col-12 col-md-10 col-lg-9 mx-auto'
                    ]
                ]); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 4]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-7">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Jo\'natish', ['class' => 'btn btn-primary w-100', 'name' => 'contact-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
        </div>

    <?php endif; ?>
</div>

<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-register">
    <h3 class="text-center mb-3"><?= Html::encode($this->title) ?></h3>

    <div class="row justify-content-center">
        <div class="flex">
            <?php $form = ActiveForm::begin(['id' => 'register-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email')->input('email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
    <p class="text-center">Sudah memiliki akun? <?= Html::a('Login', ['user/login']) ?></p>
    <p class="text-center"> <?= Html::a('Kembali ke Beranda', ['/']) ?></p>
</div>

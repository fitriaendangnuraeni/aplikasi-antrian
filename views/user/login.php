<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login">
    <div class="grid">
        <h3 class="text-center mb-3"><?= Html::encode($this->title) ?></h3>

        <div class="row justify-content-center">
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'password')->passwordInput() ?>

                    <?= $form->field($model, 'rememberMe')->checkbox() ?>

                    <div class="form-group">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
        </div>
        <p class="text-center">Belum memiliki akun? <?= Html::a('Register', ['user/register']) ?></p>
        <p class="text-center"> <?= Html::a('Kembali ke Beranda', ['/']) ?></p>
    </div>
</div>

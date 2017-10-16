<?php
$this->title = 'Demo Model dan Form Yii2';
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Demo Form yii2</h1>
<hr>
<p>Contoh Form untuk pendaftaran member</p>

<?php $form = ActiveForm::begin([
    'id' => 'registration-form',
    'options' => ['class' => 'form-horizontal']
])
?>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'username')->hint('Diisi dengan nama yang terdiri dari angkat huruf kecil dan besar') ?>
    <?= $form->field($model, 'email')->hint('Diisi dengan email pribadi Anda') ?>
    <?= $form->field($model, 'password')->PasswordInput(); ?>
    <?= $form->field($model, 'confirm_password')->PasswordInput(); ?>
    <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
    </div>
</div>

<?php ActiveForm::end();
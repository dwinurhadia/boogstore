<?php
$this->title = 'Demo Model Form';
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Demo Form Yii2</h1>
<hr>
<p>Contoh form untuk pengaturan profile member</p>

<?php $form = ActiveForm::begin([
    'id' => 'my-profile-form',
    'options' => ['class' => 'form-horizontal'],
])
?>

<div class="form-group">
    <div class="col-lg-6">
    <?= $form->field($model, 'username')->hint('Diisi dengan nama yang terdiri dari angka, huruf kecil atau huruf besar'); ?>
    <?= $form->field($model, 'email')->hint('Diisi dengan e-mail pribadi Anda'); ?>
    <?= $form->field($model, 'gender')->radioList([ 
        'pria' => 'Pria', 
        'wanita' => 'Wanita',
        ]); ?>
    <?= $form->field($model, 'phone'); ?>
    <?= $form->field($model, 'website'); ?>
    <?= $form->field($model, 'jobs')->dropdownList([
                                                    "akuntan"=>"Akuntan", 
                                                    "manager_proyek"=>"Proyek Manager",
                                                    "konsultan_hukum"=>"Konsultan Hukum",
                                                    "dosen"=>"Dosen",
                                                    "administrasi"=>"Administrasi",
                                                ], ['prompt'=>'Pilih pekerjaan Anda saat ini']); ?>
    <?= $form->field($model, 'hobby[]')->checkboxList([ 
                                                        'baca_buku' => 'Membaca Buku', 
                                                        'futsal' => 'Futsal', 
                                                        'hiking' => 'Naik Gunung',
                                                        'programming' => 'Ngoding Santai di Pantai',
                                                        'sepeda' => 'Bersepeda',
                                                        'fotografi' => 'Popotoan',
                                                        'kuliner' => 'Makan di tempat mahal',
                                                    ]); ?>

    <?= $form->field($model, 'photo')->fileInput(); ?>    
    <?= $form->field($model, 'about')->textArea(); ?>
    <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>
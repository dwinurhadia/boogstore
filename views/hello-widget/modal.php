<?php
use yii\bootstrap\Modal;
$this->title = "Demo Modal";

?>

<h1>Demo Modal</h1>

<p>Berikut ini adalah contoh penggunaan <i>modal</i>pada yii2</p>

<?php

Modal::begin([
    'header' => '<h1>ini adalah judul</h1>',
    'footer' => '<h2>ini adalah footer</h2>',
    'toggleButton' => ['label' => 'Submit'],
]);

echo "ini adalah sebuah modal";

Modal::end();

?>
<?php

use yii\bootstrap\Alert;
$this->title = 'Demo alert - bootstrap';

?>

<h1>Demo Widget</h1>
<p>Berikut init contoh penggunaan <i>widget</i> Alert di Yii2</p>

<?php
echo Alert::widget([
    'options' => [
        'class' => 'alert-info',
    ],
    'body' => '[INFO] ini adalah alert',
]);

echo Alert::widget([
    'options' => [
        'class' => 'alert-warning',
    ],
    'body' => '[INFO] ini adalah alert',
]);

echo Alert::widget([
    'options' => [
        'class' => 'alert-success',
    ],
    'body' => '[INFO] ini adalah alert',
]);

echo Alert::widget([
    'options' => [
        'class' => 'alert-danger',
    ],
    'body' => '[INFO] ini adalah alert',
]);

?>
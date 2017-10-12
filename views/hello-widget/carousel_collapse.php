<?php

use yii\bootstrap\Carousel;
use yii\bootstrap\Collapse;
$this->title = 'Demo Carousel dan Collapse';
?>

<h1>Demo Widget</h1>

<p>berikut contoh penggunaaan carousel</p>

<?php
echo Carousel::widget([
    'items' => [
        [
            'content' => 'Ini adalah slider 1',
            'captions' => '<h2>ini bagian judul 1</h2>',
        ],
        [
            'content' => 'Ini adalah slider 2',
            'captions' => '<h2>ini bagian judul 2</h2>',
        ],
        [
            'content' => 'Ini adalah slider 3',
            'captions' => '<h2>ini bagian judul 3</h2>',
        ],
    ]
]);

?>

<?php
echo Collapse::widget([
    'items' => [
        [
            'label' => 'Ini adalah slider 1',
            'content' => '<h2>ini bagian judul</h2>',
        ],
        [
            'label' => 'Ini adalah slider 1',
            'content' => '<h2>ini bagian judul</h2>',
        ],
        [
            'label' => 'Ini adalah slider 1',
            'content' => '<h2>ini bagian judul</h2>',
        ]
    ]
]);
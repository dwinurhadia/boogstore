<?php
use yii\bootstrap\Button;
use yii\bootstrap\ButtonGroup;
use yii\bootstrap\ButtonDropdown;
$this->title = 'Demo Button Twiteer Bootstrap';
?>

<h1>Demo Modal Button</h1>

<p>Berikut ini adalah penggunaan <i>widget</i> button</p>

<?php
echo Button::widget([
    'label' => 'Button large',
    'options' => ['class' => 'btn-lg btn-default', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button medium',
    'options' => ['class' => 'btn-md btn-info', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button small',
    'options' => ['class' => 'btn-sm btn-warning', 'style' => 'margin-right:10px;'],
]);

echo Button::widget([
    'label' => 'Button exSmall',
    'options' => ['class' => 'btn-xs btn-danger', 'style' => 'margin-right:10px;'],
]);

?>

<p>Berikut ini contoh penggunaan <i>widget</i> ButtonDropdown di Yii2:</p>

<?php

echo ButtonDropdown::widget([
    'label' => 'Button Dropdown',
    'options' => ['class'=>'btn-default', 'style'=>'margin-right:10px;'],
    'dropdown' => [
        'items' => [
            ['label' => 'Lorem', 'url' => '#'],
            ['label' => 'Ipsum', 'url' => '#'],
        ],
    ],
]);

echo ButtonDropdown::widget([
    'label' => 'Button Dropdown',
    'options' => ['class'=>'btn-info', 'style'=>'margin-right:10px;'],
    'dropdown' => [
        'items' => [
            ['label' => 'Lorem', 'url' => '#'],
            ['label' => 'Ipsum', 'url' => '#'],
        ],
    ],
]);

?>

<p>Berikut ini contoh penggunaan <i>widget</i> ButtonGroups di Yii2:</p>

<?php

echo ButtonGroup::widget([
    'buttons' => [
        ['label' => 'Gunung Fuji', 'options' => ['class'=>'btn-info']],
        ['label' => 'Gunung Kinabalu', 'options' => ['class'=>'btn-default']],
        ['label' => 'Bukit Jayawijaya', 'options' => ['class'=>'btn-success']],
        ['label' => 'Tebing Keraton', 'options' => ['class'=>'btn-warning']],
        ['label' => 'Puncak Himalaya', 'options' => ['class'=>'btn-danger']],
    ]
]);


?>
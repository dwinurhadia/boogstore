<?php

//CREATE USER 'monty'@'10.70.%.%' IDENTIFIED BY 'some_pass';
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=10.13.245.106;dbname=soccerdb',
    'username' => 'monty',
    'password' => 'some_pass',
    'charset' => 'utf8',
];

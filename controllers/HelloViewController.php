<?php

namespace app\controllers;

use Yii;
use yii\filter\ActionControl;
use yii\web\Controller;
use app\components\HelloWidget;

class HelloViewController extends Controller
{
    public $layout = 'demo';
    public function actions()
    {
        return  [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDemo()
    {
        return $this->render('demo/sample');
    }

    public function actionGreeting($name="Soming Lie Aruaba", $salutation="Mr", $address="Jogjakarta")
    {
        return $this->render('greeting',[
            'name' => $name,
            'salutation' => $salutation,
            'address' => $address
        ]);
    }

    public function actionWidget()
    {
        $hello = HelloWidget::widget(['message' => 'Haio Pesan ini oleh widget dari component hello widget']);
        return $this->render('demo/widget', [
            'hello_widget' => $hello
        ]);
    }

    public function actionDemoMetaTags()
    {
        return $this->render('demo/metatags');
    }
}

?>
<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class HelloWidgetController extends Controller 
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionDemoModal()
    {
        return $this->render('modal');
    }

    public function actionDemoButton()
    {
        return $this->render('button');
    }

    public function actionDemoCarouselCollapse()
    {
        return $this->render('carousel_collapse');
    }
    
    public function actionDemoBreadcrumbs()
    {
        return $this->render('breadcrumbs');
    }

    public function actionDemoMasked(Type $var = null)
    {
        return $this->render('masked_input');
    }
}
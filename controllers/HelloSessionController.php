<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class HelloSessionController extends Controller 
{
    public function action()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $session = Yii::$app->session;
        $session->set('language','en-US');
        $session->set('dialect','California');

        echo "Memasang session pada halaman index";
    }

    public function actionDeploy()
    {
        $session = Yii::$app->session;
        echo $session->get('language');
        echo "<br>";
        echo $session->get('dialect');
    }

    public function actionDestroy()
    {
        $session = Yii::$app->session;

        $session->remove('language');
        $session->remove('dialect');

        echo "Menghapus session";
    }

    public function actionFlashData()
    {
        $session = Yii::$app->session;
        
        $session->setFlash('message', 'ini adalah hello session 1 flashdata/flash-data...');
        $session->setFlash('message', 'ini adalah hello session 2 flashdata/flash-data...');
        $session->setFlash('message', 'ini adalah hello session 3 flashdata/flash-data...');

        return $this->redirect('/index.php?r=hello-session/flash-display');
    }

    public function actionFlashDisplay()
    {
        $session = Yii::$app->session;

        echo "Menampilkan flash data";
        echo $session->getFlash('message');
        echo "<br>";
        echo $session->getFlash('message kedua');
        echo "<br>";
        echo $session->getFlash('message ketiga');
    }
}
?>
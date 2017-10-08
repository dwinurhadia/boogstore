<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class HelloController extends Controller
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
        echo "Hello World";
    }

    public function actionPosts($id=0,$category="all")
    {
        echo "Sedang menampilkan post halaman id:".$id;
    }
    
    public function actionPostComments($id)
    {
        echo "Sedang menampilkan post comment halaman dengan id:".$id;
    }

    public function actionUserPostComments($user_id, $bulan, $tahun)
    {
        echo "Sedang menampilan daftar postingan dari user dengan id:".$user_id." tahun dengan arsip ".$bulan." / ".$tahun; 
    }

    public function actionTestRedirect()
    {
        echo "Halaman ini akan diredirect dalam waktu 5 detik...";
        sleep(5);
        return $this->redirect('/basic/web/index.php');
    }
}


?>
<?php

namespace app\controllers\media;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class AudioController extends Controller
{
    public function action()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex($id=null)
    {
        echo "Sedang menampilkan daftar nilai audio yang diupload".$id;
    }

    public function actionCreate()
    {
        echo "Disini akan muncul form tambah audio";
    }
}
?>
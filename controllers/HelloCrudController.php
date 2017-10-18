<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\helpers\Url;

use app\models\Teams;
use app\models\Leagues;


class HelloCrudController extends Controller 
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function behaviours()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','detail'],
                'rules' => [
                    [
                        'actions' => ['index','detail'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $query = Teams::find();
        $teams = $query->orderBy('id')
                ->all();
        return $this->render('index', ['teams' => $teams]);
    }

    public function actionDetail($id)
    {
        $team = Teams::findOne(['id'=>$id]);
        return $this->render('detail', ['team'=>$team]);
    }
}
?>
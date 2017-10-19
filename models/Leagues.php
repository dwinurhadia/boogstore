<?php
namespace app\models;

use yii\db\ActiveRecord;

class Leagues extends ActiveRecord 
{
    public function tableName()
    {
        return 'leagues';
    }
}
?>
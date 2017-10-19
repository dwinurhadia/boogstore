<?php
namespace app\models;

use yii\base\Model;

class TeamsForm extends Model 
{
    public $name;
    public $country;
    public $description;
    public $league_id;

    public function attributeLabels()
    {
        return [
            'name' => 'Nama Tim Sepakbola',
            'country' => 'Negara Asal',
            'description' => 'Deskripsi Team',
        ];
    }

    public function rules()
    {
        return [
            ['name','required','message' => 'Nama tim tidak boleh kosong'],
            ['name', 'string', 'max'=>'20'],
            ['country','required','message'=> 'Negara asal tidak boleh kosong'],
            ['country', 'string', 'max'=>'35'],
        ];
    }

    
}
?>
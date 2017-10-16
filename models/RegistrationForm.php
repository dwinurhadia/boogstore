<?php
namespace app\models;

use yii\base\Model;

class RegistrationForm extends Model 
{
    public $username;
    public $email;
    public $password;
    public $confirm_password;
    public $website;
    public $phone;

    public function rules()
    {
        return [
            ['username', 'required', 'message' => 'Username tidak boleh kosong'],
            ['username','string','max'=>'30'],
            ['email','required','message' => 'Email tidak boleh dikosongkan'],
            ['email','email'],
            ['password','required','message'=> 'Password tidak boleh kosong'],
            ['confirm_password','required'],
        ];
    }

}
?>
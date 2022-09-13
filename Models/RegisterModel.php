<?php

namespace App\Models;

use App\Core\Application;
use App\Core\Model;

class RegisterModel extends Model
{
    public string $firstName ;
    public string $lastName ;
    public string $email ;
    public string $password ;
    public string $confirmPassword;

    public function register()
    {
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        $this->save();
    }


//    public function load($data)
//    {
//        $this->firstName = $data['firstName'];
//        $this->lastName = $data['lastName'];
//        $this->email = $data['email'];
//        $this->password = $data['password'];
//        $this->confirmPassword = $data['confirmPassword'];
//    }

    public function save()
    {
//        Application::$app->dump($this);
    }

    public function rules(): array
    {
        return [
            'firstName' => [self::RULE_REQUIRED],
            'lastName' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']]
        ];

    }
    public function validate():bool
    {
        return true;
    }
}
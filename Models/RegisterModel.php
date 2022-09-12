<?php

namespace App\Models;

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
        echo "Creating new user";
    }

//    public function load($data)
//    {
//        $this->firstName = $data['firstName'];
//        $this->lastName = $data['lastName'];
//        $this->email = $data['email'];
//        $this->password = $data['password'];
//        $this->confirmPassword = $data['confirmPassword'];
//    }
//
//    public function validate(): bool
//    {
//        if (empty($this->firstName)) {
//            return false;
//        }
//        if (empty($this->lastName)) {
//            return false;
//        }
//        if (empty($this->email)) {
//            return false;
//        }
//        if (empty($this->password)) {
//            return false;
//        }
//        if (empty($this->confirmPassword)) {
//            return false;
//        }
//        if ($this->password !== $this->confirmPassword) {
//            return false;
//        }
//        return true;
//    }


}
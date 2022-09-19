<?php

namespace App\Models;

use App\Core\Application;
use App\Core\DbModel as parentAlias;
use App\Core\Model;

class User extends parentAlias
{
    public string $firstName = "";
    public string $lastName = "";
    public string $email = "";
    public string $password = "";
    public string $confirmPassword = "";


    public function register()
    {

        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        parent::save();
    }

//    labels for the form
    public function labels(): array
    {
        return [
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'email' => 'Email',
            'password' => 'Password',
            'confirmPassword' => 'Confirm Password'
        ];
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

    public function save()
    {
//TODO
    }

    public function tableName(): string
    {
        return 'users';
    }

    public function attributes(): array
    {
        return ['firstName', 'lastName', 'email', 'password'];
    }
}
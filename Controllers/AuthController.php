<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Request;
use App\Models\RegisterModel;

class AuthController extends Controller
{

    public function login(): string
    {
        $this->setLayout('auth');
        return $this->render('Login');
    }

    public function register(Request $request): string
    {
        $this->setLayout('auth');
        if($request->isPost()){
            $registerModel = new RegisterModel();
            $registerModel->loadData($request->getBody());

            if($registerModel->validate() && $registerModel->register()){
                return 'Success';
            }
            return $this->render('Register', [
                'model' => $registerModel
            ]);

        }

        return $this->render('Register',
            [
                'model' => new RegisterModel()
            ]
        );
    }
}
<?php

namespace App\Controllers;

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

        $registerModel = new RegisterModel();
        if ($request->isPost()) {

            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->register()) {
                return 'Success';
            }
            return $this->render('Register', [
                'model' => $registerModel
            ]);

        }
        $this->setLayout('auth');
        return $this->render('Register');
    }
}
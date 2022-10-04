<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Request;
use App\Models\User;

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
        if ($request->isPost()) {
            $user = new User();
            $user->loadData($request->getBody());

            if ($user->validate() && $user->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
                exit;
            }
            return $this->render('Register', [
                'model' => $user
            ]);

        }

        return $this->render('Register',
            [
                'model' => new User()
            ]
        );
    }
}
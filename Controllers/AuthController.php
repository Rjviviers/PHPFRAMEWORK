<?php

namespace App\Controllers;

use App\Core\Application;
use App\Core\Controller;
use App\Core\Request;
use App\Core\Response;
use App\Models\LoginForm;
use App\Models\User;

class AuthController extends Controller
{

    public function login(Request $request,Response $response)
    {
        $loginForm = new LoginForm();
        if ($request->isPost()) {
            $loginForm->loadData($request->getBody());
            if ($loginForm->validate() && $loginForm->login()) {
                $response->redirect('/');
                return;
            }
        }
        $this->setLayout('auth');

        return $this->render('login',[
            'model' => $loginForm
        ]);
    }

    public function logout()
    {
        Application::$app->logout();
        Application::$app->response->redirect('/');
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
            return $this->render('register', [
                'model' => $user
            ]);

        }

        return $this->render('register',
            [
                'model' => new User()
            ]
        );
    }
}
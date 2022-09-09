<?php

namespace App\Controllers;


use App\Core\Application;
use App\Core\Controller;
use App\Core\Request;

class SiteController extends Controller
{
    public function home(): string
    {
        $params = [
            'name' => "Ruan"
        ];
        return $this->render('Home', $params);
    }
    public function contact(): string
    {
        return $this->render('Contact');
    }
    public function handleContact(Request $request): array
    {
        return $request->getBody();
    }
}
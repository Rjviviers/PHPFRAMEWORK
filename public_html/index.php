<?php

use App\Controllers\AuthController;
use App\Controllers\SiteController;
use App\Core\Application;
use App\Models\User;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
//set php to show errors
ini_set('display_errors', '1');
//format errors
ini_set('html_errors', '1');
ini_set('error_prepend_string','<pre style="color: white">');
ini_set('error_append_string','</pre>');
$config = [
    'userClass' => User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class, 'home']);

//about page routing
$app->router->get('/about', [SiteController::class, 'about']);

//blog page routing
$app->router->get('/blog', [SiteController::class, 'blog']);

//Contact page routing
$app->router->get('/contact', [SiteController::class, "contact"]);
$app->router->post('/contact', [SiteController::class, "handleContact"]);

//implement router for login view and form handling
$app->router->get('/login', [AuthController::class, "login"]);
$app->router->post('/login', [AuthController::class, "login"]);

//implement router for register view and form handling
$app->router->get('/register', [AuthController::class, "register"]);
$app->router->post('/register', [AuthController::class, "register"]);

//implement router for logout
$app->router->get('/logout', [AuthController::class, "logout"]);


$app->run();


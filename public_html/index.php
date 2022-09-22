<?php
use App\Controllers\AuthController;
use App\Controllers\SiteController;
use App\Core\Application;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__),$config);

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

$app->run();


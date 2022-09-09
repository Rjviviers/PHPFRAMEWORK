<?php 

require_once __DIR__ . '/../vendor/autoload.php';
use App\Core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', "Home");
$app->router->get('/contact', "Contact");
$app->router->post('/contact', function(){
    return "Handling submitted data";
});

$app->run();


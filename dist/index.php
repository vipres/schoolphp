<?php


use app\controllers\auth\AuthController;
use app\Controllers\HomeController;
use app\Core\Application;

require_once __DIR__."/../vendor/autoload.php";

$app = new Application(dirname(__DIR__));

$app->router->get('/', [HomeController::class, 'index']);
$app->router->get('/contact', [HomeController::class, 'contact']);
$app->router->post('/contact', [HomeController::class, 'handleContact']);
$app->router->get('/profile', 'profile');



$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);



$app->run();



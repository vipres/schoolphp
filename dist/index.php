<?php

//require("../app/core/autoload.php");

use app\Core\Application;

require_once __DIR__."/../vendor/autoload.php";

$app = new Application();

$app->router->get('/hola', "Hola");


$app->run();



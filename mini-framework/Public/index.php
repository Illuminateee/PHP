<?php

use Staditek\App\Controller\HomeController;
use Staditek\App\Core\Router;
require_once __DIR__ .'/../vendor/autoload.php';

Router::addRoute('GET','/',HomeController::class,'index',[]);
Router::run(); 
    
?>
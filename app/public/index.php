<?php

use Portfolio\Router\Router;
use Portfolio\Tools\Security;

require __DIR__."/../vendor/autoload.php";
require __DIR__."/../src/router/routes.php";



$router = new Router();
$security = new Security();

$router->pageRouting(ROUTES);
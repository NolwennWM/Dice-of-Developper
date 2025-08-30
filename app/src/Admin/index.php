<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start(); 

require __DIR__."/routes_admin.php";
global $router;

$router->setDefaultHTML(__DIR__."/view/include/Default_Admin_View.php");
$router->setRootPath(__DIR__."/");
$router->setControllerNamespace("Portfolio\\Admin\\Controller");

$router->pageRouting(ROUTES_ADMIN);
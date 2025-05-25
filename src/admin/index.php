<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start(); 

require __DIR__."/routes_admin.php";
    
global $router;

$router->pageRouting(ROUTES_ADMIN);
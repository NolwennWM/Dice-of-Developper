<?php
use Portfolio\Admin\Controller\Auth_Controller;

session_start();

require __DIR__."/routes_admin.php";
    
global $router;

$router->pageRouting(ROUTES_ADMIN);

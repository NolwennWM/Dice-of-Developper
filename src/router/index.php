<?php
require __DIR__."/router.php";
require __DIR__."/routes.php";
require __DIR__."/../tools/Security.php";

$router = new Router();
$security = new Security();

$router->pageRouting(ROUTES);

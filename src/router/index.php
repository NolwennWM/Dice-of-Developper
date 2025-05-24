<?php
require __DIR__."/router.php";
require __DIR__."/routes.php";

$router = new Router();

$router->pageRouting(ROUTES);

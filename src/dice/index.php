<?php 
require __DIR__."/database/model.php";
global $router;

$data = getData($router->current_lang);

$router->requirePage("dice/dice.php", $data);
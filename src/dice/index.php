<?php 
require __DIR__."/database/model.php";
global $router;

$data = getData("fr");

$router->requirePage("dice/dice.php", $data);
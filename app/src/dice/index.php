<?php 
require __DIR__."/database/model.php";
global $router;

$data = getData($router->current_lang);

$converted_data = [];

foreach($data as $content)
{
    $name = $content["prefix"]; 
    $results = json_decode($content["grouped_content"], true);
    $converted_data[$name] = count($results)===1 ? $results[0] : $results;
}

$router->requirePage("dice/dice.php", $converted_data);
<?php 
require __DIR__."/database/model.php";

$data = getData("fr");

requirePage("dice/dice.php", $data);
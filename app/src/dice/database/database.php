<?php
/**
 * retourne une instance de connexion PDO à la BDD
 *
 * @param boolean $admin if true is passed, the connexion have all rights
 * @return PDO
 */
function connexion_PDO($admin = false): \PDO
{

    $config = require __DIR__."/config.php";

    $dsn = 
    "mysql:host=".$config["host"]
    .";port=".$config["port"]
    .";dbname=".$config["database"]
    .";charset=".$config["charset"];

    $username = $admin ? $config["username_admin"]:$config["username_guest"];
    $password = $admin ? $config["password_admin"]:$config["password_guest"];

    try{
        $pdo = new \PDO(
            $dsn, 
            $username, 
            $password,
            $config["options"] 
        );
		return $pdo;
    }catch(\PDOException $e){
        global $router;
        $router->getPageNotFound($e->getMessage());
        exit;
    }
}
<?php
/**
 * retourne une instance de connexion PDO à la BDD
 *
 * @return PDO
 */
function connexionPDO(): \PDO{

    $config = require __DIR__."/config.php";

    $dsn = 
    "mysql:host=".$config["host"]
    .";port=".$config["port"]
    .";dbname=".$config["database"]
    .";charset=".$config["charset"];

    try{
        $pdo = new \PDO(
            $dsn, 
            $config["user"], 
            $config["password"],
            $config["options"] 
        );
		return $pdo;
    }catch(\PDOException $e){
        getPageNotFound($e->getMessage());
        exit;
    }
}
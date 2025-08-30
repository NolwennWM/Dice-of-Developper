<?php
namespace Portfolio\Admin\Core\Database;

/**
 * Class to handle database connection using PDO
 */
class Database_Connexion
{
    private $config = [];

    public function __construct()
    {
        $this->config = require __DIR__ . "/Database_Config.php";
    }
    /**
     * Connect to the database with PDO using the configuration parameters
     *
     * @return \PDO
     */
    public function connect(): \PDO
    {

        $dsn = "mysql:host={$this->config['host']};dbname={$this->config['database']};charset={$this->config['charset']}";
        try {
            return new \PDO($dsn, $this->config['username_admin'], $this->config['password_admin'], $this->config['options']);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
        
    }
}
<?php
namespace Portfolio\Admin\Core\Abstract;

require_once __DIR__ . "/../Database/Database_Connexion.php";

use Portfolio\Admin\Core\Database\Database_Connexion;

abstract class Abstract_Model extends Database_Connexion
{
    protected $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->connect();
    }
}
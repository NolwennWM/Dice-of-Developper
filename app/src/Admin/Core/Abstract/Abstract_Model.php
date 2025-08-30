<?php
namespace Portfolio\Admin\Core\Abstract;

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
<?php 
namespace Portfolio\Admin\Model;

use Portfolio\Admin\Core\Abstract\Abstract_Model;

require_once __DIR__ . "/../core/abstract/Abstract_Model.php";

class Admin_Model extends Abstract_Model
{
    /**
     * Get admin user by email
     *
     * @param string $email
     * @return array|false
     */
    public function getAdminByEmail(string $email): array|false
    {
        $stmt = $this->db->prepare("SELECT * FROM admin WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch();
    }
}
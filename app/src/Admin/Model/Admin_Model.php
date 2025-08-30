<?php 
namespace Portfolio\Admin\Model;

use Portfolio\Admin\Core\Abstract\Abstract_Model;

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
    /**
     * Create a new admin user
     *
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function createAdmin(string $email, string $password): bool
    {
        $stmt = $this->db->prepare("INSERT INTO admin (email, password) VALUES (:email, :password)");
        return $stmt->execute(['email' => $email, 'password' => $password]);
    }
    /**
     * Check if there is at least one admin user in the database
     *
     * @return bool
     */
    public function hasExistingAdmin(): bool
    {
        $stmt = $this->db->query("SELECT COUNT(*) as count FROM admin");
        $result = $stmt->fetch();
        return $result && $result['count'] > 0;
    }
}
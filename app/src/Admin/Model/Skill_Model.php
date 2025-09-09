<?php
namespace Portfolio\Admin\Model;

use Portfolio\Admin\Core\Abstract\Abstract_Model;

class Skill_Model extends Abstract_Model
{
    public function getAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM skills");
        return $stmt->fetchAll();
    }

    public function getById(int $id): array|false
    {
        $stmt = $this->db->prepare("SELECT * FROM skills WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function create(array $data): bool
    {
        $stmt = $this->db->prepare("INSERT INTO skills (name, description, icon) VALUES (:name, :description, :icon)");
        return $stmt->execute($data);
    }

    public function update(int $id, array $data): bool
    {
        $stmt = $this->db->prepare("UPDATE skills SET name = :name, description = :description, icon = :icon WHERE id = :id");
        $data['id'] = $id;
        return $stmt->execute($data);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare("DELETE FROM skills WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
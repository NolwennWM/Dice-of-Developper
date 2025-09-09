<?php
namespace Portfolio\Admin\Model;

use Portfolio\Admin\Core\Abstract\Abstract_Model;

class Project_Model extends Abstract_Model
{
    public function getAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM projects");
        return $stmt->fetchAll();
    }

    public function getById(int $id): array|false
    {
        $stmt = $this->db->prepare("SELECT * FROM projects WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function create(array $data): bool
    {
        $stmt = $this->db->prepare("INSERT INTO projects (title, description, url, image) VALUES (:title, :description, :url, :image)");
        return $stmt->execute($data);
    }

    public function update(int $id, array $data): bool
    {
        $stmt = $this->db->prepare("UPDATE projects SET title = :title, description = :description, url = :url, image = :image WHERE id = :id");
        $data['id'] = $id;
        return $stmt->execute($data);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare("DELETE FROM projects WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
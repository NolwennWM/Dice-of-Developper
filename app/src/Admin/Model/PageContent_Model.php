<?php
// filepath: c:\Users\Nolwenn\Documents\dev\Dice-of-Developper\app\src\Admin\Model\PageContent_Model.php
namespace Portfolio\Admin\Model;

use Portfolio\Admin\Core\Abstract\Abstract_Model;

class PageContent_Model extends Abstract_Model
{
    public function getAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM page_content");
        return $stmt->fetchAll();
    }

    public function getById(int $id): array|false
    {
        $stmt = $this->db->prepare("SELECT * FROM page_content WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function create(array $data): bool
    {
        $stmt = $this->db->prepare("INSERT INTO page_content (slug, title, content, language) VALUES (:slug, :title, :content, :language)");
        return $stmt->execute($data);
    }

    public function update(int $id, array $data): bool
    {
        $stmt = $this->db->prepare("UPDATE page_content SET slug = :slug, title = :title, content = :content, language = :language WHERE id = :id");
        $data['id'] = $id;
        return $stmt->execute($data);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare("DELETE FROM page_content WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
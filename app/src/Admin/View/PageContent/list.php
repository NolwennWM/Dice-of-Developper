<?php
// filepath: c:\Users\Nolwenn\Documents\dev\Dice-of-Developper\app\src\Admin\View\PageContent\list.php
?>
<h1>Liste des contenus de page</h1>
<a href="/admin/page-content/create">Ajouter un contenu</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Slug</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Langue</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $content): ?>
        <tr>
            <td data-label="ID"><?= htmlspecialchars($content['id']) ?></td>
            <td data-label="Slug"><?= htmlspecialchars($content['slug']) ?></td>
            <td data-label="Titre"><?= strip_tags($content['title']) ?></td>
            <td data-label="Contenu"><?= $this->previewContent($content['content']) ?></td>
            <td data-label="Langue"><?= htmlspecialchars($content['language']) ?></td>
            <td data-label="Actions">
                <a href="/admin/page-content/edit/<?= $content['id'] ?>">Modifier</a>
                <a href="/admin/page-content/delete/<?= $content['id'] ?>" onclick="return confirm('Supprimer ce contenu ?')">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
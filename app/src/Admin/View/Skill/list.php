<?php
// filepath: c:\Users\Nolwenn\Documents\dev\Dice-of-Developper\app\src\Admin\View\Skill\list.php
?>
<h1>Liste des compétences</h1>
<a href="/admin/skill/create">Ajouter une compétence</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Slug</th>
            <th>Icône</th>
            <th>Affichage</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $skill): ?>
        <tr>
            <td data-label="ID"><?= htmlspecialchars($skill['id']) ?></td>
            <td data-label="Nom"><?= htmlspecialchars($skill['name']) ?></td>
            <td data-label="Slug"><?= htmlspecialchars($skill['slug']) ?></td>
            <td data-label="Icône"><?= htmlspecialchars($skill['logo']) ?></td>
            <td data-label="Affichage"><?= htmlspecialchars($skill['display']) ?></td>
            <td data-label="Actions">
                <a href="/admin/skill/edit/<?= $skill['id'] ?>">Modifier</a>
                <a href="/admin/skill/delete/<?= $skill['id'] ?>" onclick="return confirm('Supprimer cette compétence ?')">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
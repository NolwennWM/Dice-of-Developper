<h1>Liste des projets</h1>
<a href="/admin/project/create">Ajouter un projet</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Slug</th>
            <th>Github</th>
            <th>URL</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $project): ?>
        <tr>
            <td data-label="ID"><?= htmlspecialchars($project['id']) ?></td>
            <td data-label="Slug"><?= htmlspecialchars($project['slug']) ?></td>
            <td data-label="Github"><a href="<?= htmlspecialchars($project['github']) ?>" target="_blank"><img src="/assets/images/logo/Github_Logo.svg" alt="Logo de Github"></a></td>
            <td data-label="URL"><a href="<?= htmlspecialchars($project['link']) ?>" target="_blank"><img src="/assets/images/icons/internet.svg" alt="Logo planète web"></a></td>
            <td data-label="Image"><?= htmlspecialchars($project['image']) ?></td>
            <td data-label="Actions">
                <a href="/admin/project/edit/<?= $project['id'] ?>">Modifier</a>
                <a href="/admin/project/delete/<?= $project['id'] ?>" onclick="return confirm('Supprimer ce projet ?')">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
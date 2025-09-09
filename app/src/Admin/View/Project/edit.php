<?php
// filepath: c:\Users\Nolwenn\Documents\dev\Dice-of-Developper\app\src\Admin\View\Project\edit.php
?>
<h1>Modifier le projet</h1>
<form action="/admin/project/edit_submit/<?= $item['id'] ?>" method="post">
    <div>
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" value="<?= htmlspecialchars($item['title']) ?>" required>
    </div>
    <div>
        <label for="description">Description :</label>
        <textarea name="description" id="description" required><?= htmlspecialchars($item['description']) ?></textarea>
    </div>
    <div>
        <label for="url">URL :</label>
        <input type="text" name="url" id="url" value="<?= htmlspecialchars($item['url']) ?>">
    </div>
    <div>
        <label for="image">Image :</label>
        <input type="text" name="image" id="image" value="<?= htmlspecialchars($item['image']) ?>">
    </div>
    <button type="submit">Enregistrer</button>
</form>
<a href="/admin/project">Retour à la liste</a>
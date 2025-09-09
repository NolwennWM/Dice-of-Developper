<?php
// filepath: c:\Users\Nolwenn\Documents\dev\Dice-of-Developper\app\src\Admin\View\PageContent\edit.php
?>
<h1>Modifier le contenu de page</h1>
<form action="/admin/page-content/edit_submit/<?= $item['id'] ?>" method="post">
    <div>
        <label for="slug">Slug :</label>
        <input type="text" name="slug" id="slug" value="<?= htmlspecialchars($item['slug']) ?>" required>
    </div>
    <div>
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" value="<?= htmlspecialchars($item['title']) ?>" required>
    </div>
    <div>
        <label for="content">Contenu :</label>
        <textarea name="content" id="content" required><?= htmlspecialchars($item['content']) ?></textarea>
    </div>
    <div>
        <label for="language">Langue :</label>
        <input type="text" name="language" id="language" value="<?= htmlspecialchars($item['language']) ?>" required>
    </div>
    <button type="submit">Enregistrer</button>
</form>
<a href="/admin/page-content">Retour à la liste</a>
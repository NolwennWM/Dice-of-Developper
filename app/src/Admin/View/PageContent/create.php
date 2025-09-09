<?php
// filepath: c:\Users\Nolwenn\Documents\dev\Dice-of-Developper\app\src\Admin\View\PageContent\create.php
?>
<h1>Ajouter un contenu de page</h1>
<form action="/admin/page-content/create_submit" method="post">
    <div>
        <label for="slug">Slug :</label>
        <input type="text" name="slug" id="slug" required>
    </div>
    <div>
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="content">Contenu :</label>
        <textarea name="content" id="content" required></textarea>
    </div>
    <div>
        <label for="language">Langue :</label>
        <input type="text" name="language" id="language" value="fr" required>
    </div>
    <button type="submit">Ajouter</button>
</form>
<a href="/admin/page-content">Retour à la liste</a>
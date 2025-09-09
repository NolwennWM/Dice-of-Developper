<?php
// filepath: c:\Users\Nolwenn\Documents\dev\Dice-of-Developper\app\src\Admin\View\Project\create.php
?>
<h1>Ajouter un projet</h1>
<form action="/admin/project/create_submit" method="post">
    <div>
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="description">Description :</label>
        <textarea name="description" id="description" required></textarea>
    </div>
    <div>
        <label for="url">URL :</label>
        <input type="text" name="url" id="url">
    </div>
    <div>
        <label for="image">Image :</label>
        <input type="text" name="image" id="image">
    </div>
    <button type="submit">Ajouter</button>
</form>
<a href="/admin/project">Retour à la liste</a>
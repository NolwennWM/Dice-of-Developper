<?php
// filepath: c:\Users\Nolwenn\Documents\dev\Dice-of-Developper\app\src\Admin\View\Skill\create.php
?>
<h1>Ajouter une compétence</h1>
<form action="/admin/skill/create_submit" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="description">Description :</label>
        <textarea name="description" id="description" required></textarea>
    </div>
    <div>
        <label for="icon">Icône :</label>
        <input type="text" name="icon" id="icon">
    </div>
    <button type="submit">Ajouter</button>
</form>
<a href="/admin/skill">Retour à la liste</a>
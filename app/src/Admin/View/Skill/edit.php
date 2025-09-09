<?php
// filepath: c:\Users\Nolwenn\Documents\dev\Dice-of-Developper\app\src\Admin\View\Skill\edit.php
?>
<h1>Modifier la compétence</h1>
<form action="/admin/skill/edit_submit/<?= $item['id'] ?>" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" value="<?= htmlspecialchars($item['name']) ?>" required>
    </div>
    <div>
        <label for="description">Description :</label>
        <textarea name="description" id="description" required><?= htmlspecialchars($item['description']) ?></textarea>
    </div>
    <div>
        <label for="icon">Icône :</label>
        <input type="text" name="icon" id="icon" value="<?= htmlspecialchars($item['icon']) ?>">
    </div>
    <button type="submit">Enregistrer</button>
</form>
<a href="/admin/skill">Retour à la liste</a>
<?php 
$nbProjects = 42;
$nbPages = 15;
$languages = ['Français', 'English', 'Español'];
?>
{{ head: <link rel="stylesheet" href="/assets/styles/admin/dashboard.css"> }}
    <div class="dashboard-container">
        <h1>Tableau de bord du Portfolio</h1>
        <div class="stats">
            <div class="stat-card">
                <div class="stat-value">
                    <?php echo $nbProjects ?? 0; ?>
                </div>
                <div class="stat-label">Projets</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">
                    <?php echo $nbPages ?? 0; ?>
                </div>
                <div class="stat-label">Pages</div>
            </div>
            <div class="stat-card">
                <div class="stat-value">
                    <?php echo isset($languages) ? count($languages) : 0; ?>
                </div>
                <div class="stat-label">Langues disponibles</div>
            </div>
        </div>
        <div class="languages-list">
            <h2>Langues du site</h2>
            <ul>
                <?php if (!empty($languages)): ?>
                    <?php foreach ($languages as $lang): ?>
                        <li><?php echo htmlspecialchars($lang); ?></li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li>Aucune langue configurée</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>

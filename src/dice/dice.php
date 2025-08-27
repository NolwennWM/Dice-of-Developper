<!DOCTYPE html>
<html lang="<?= $this->current_lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nolwenn Weber-Marquiset">
    <meta name="copyright" content="2024, Nolwenn Weber-Marquiset">
    <meta name="description" content="Portfolio displaying skills and history of Nolwenn Weber-Marquiset">
    <meta name="keywords" content="Nolwenn, html, css, javascript, portfolio">
    <meta name="robots" content="index, follow">
    <!-- Open Graph for sns sharing -->
    <meta property="og:title" content="Nolwenn Weber-Marquiset Portfolio">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.marquiset.fr/assets/images/projects/devdice.png">
    <meta property="og:url" content="https://www.marquiset.fr">
    <meta property="og:description" content="Portfolio displaying skills and history of Nolwenn Weber-Marquiset">
    <meta property="og:site_name" content="Nolwenn Weber-Marquiset Portfolio">
    <meta property="og:locale" content="fr_FR">
    <title>Portfolio</title>
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="icon" type="image/svg+xml" href="/assets/images/nwm-logo-static-bg-white.svg">
</head>
<body class="cube-portfolio">
    <header class="portfolio-header" id="page-control">
        <!-- button for disable dice launch -->
        <label class="btn-toggle animation-toggle" for="check-animation">
            <span class="slider">
                <svg viewBox="0 0 400 400" width="200" height="200" stroke-width="10" fill="none" stroke="black"  xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" id="anime-level-icon">
                    <path d="M 200 25 L 365 100 L 200 175 L 35 100 Z M 25 115 L 190 190 V 375 L 25 300 Z M 375 115 L 210 190 V 375 L 375 300 Z" stroke-dasharray="735"/>
                    <rect x="50" y="50" width="300" height="300" rx="15" ry="15" stroke-dasharray="1400"/>
                    <circle cx="200" cy="200" r="25"/>
                    <circle cx="100" cy="100" r="25"/>
                    <circle cx="300" cy="300" r="25"/>
                </svg>
            </span>
            <input type="checkbox" class="check-toggle" id="check-animation" checked>
        </label>
        <!-- Navigation Menu -->
        <nav class="cube-navigation">
            <!-- Burger menu for narrow menu -->
            <label for="input-menu" class="menu-toggle">
                <input type="checkbox" id="input-menu">
                <svg viewBox="0 0 400 400" width="200" height="200" stroke-width="20" xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke="black" fill="none">
                    <path class="l1" d="M 50 100 H 350 A 30,30,0,1,0,325,50 L 50 350" stroke-dasharray="825"/>
                    <path class="l2" d="M 50 200 H 350" stroke-dasharray="300" />
                    <path class="l3" d="M 50 300 H 350 A 30,30,0,1,1,325,350 L 50 50" stroke-dasharray="825" />
                </svg>
            </label>
            <menu class="menu-cube-navigation">
                <li class="item-menu-cube-navigation">
                    <label for="f1" class="label-link">
                        <input type="radio" name="faces" id="f1" class="input-link" checked>
                        <span><?= $menus["menu_home"] ?></span>
                        <img src="/assets/images/icons/home.svg" alt="icone de page d'Accueil" class="icon-section">
                    </label>
                </li>
                <li class="item-menu-cube-navigation">
                    <label for="f2" class="label-link">
                        <input type="radio" name="faces" id="f2" class="input-link">
                        <span><?= $menus["menu_project"] ?></span>
                        <img src="/assets/images/icons/projects.svg" alt="icone de page des projets" class="icon-section">
                    </label>
                </li>
                <li class="item-menu-cube-navigation">
                    <label for="f3" class="label-link">
                        <input type="radio" name="faces" id="f3" class="input-link">
                        <span><?= $menus["menu_about"] ?></span>
                        <img src="/assets/images/icons/about.svg" alt="icone de page à propos" class="icon-section">
                    </label>
                </li>
                <li class="item-menu-cube-navigation">
                    <label for="f4" class="label-link">
                        <input type="radio" name="faces" id="f4" class="input-link">
                        <span><?= $menus["menu_skills"] ?></span>
                        <img src="/assets/images/icons/skills.svg" alt="icone de page des Compétences" class="icon-section">
                    </label>
                </li>
                <li class="item-menu-cube-navigation">
                    <label for="f5" class="label-link">
                        <input type="radio" name="faces" id="f5" class="input-link">
                        <span><?= $menus["menu_contact"] ?></span>
                        <img src="/assets/images/icons/contact.svg" alt="icone de page de Contact" class="icon-section">
                    </label>
                </li>
                <li class="item-menu-cube-navigation">
                    <label for="f6" class="label-link">
                        <input type="radio" name="faces" id="f6" class="input-link">
                        <span><?= $menus["menu_bonus"] ?></span>
                        <img src="/assets/images/icons/other.svg" alt="icone de page de ???" class="icon-section">
                    </label>
                </li>
            </menu>
            <div class="menu-indicator"></div>
        </nav>
        <!-- Button for dark mode -->
        <label class="btn-toggle theme-toggle" for="check-theme">
            <input type="checkbox" class="check-toggle" id="check-theme">
            <span class="slider">
                <svg viewBox="0 0 400 400" width="200" height="200" stroke-width="10" fill="none" stroke="black"  xmlns="http://www.w3.org/2000/svg" stroke-linecap="square" id="dark-theme-icon">
                    <path d="M 200 25 A 100, 100, 0, 1, 1, 200, 375 A 10, 20, 0, 0, 0, 200, 25 Z" stroke-dasharray="975"/>
                    <circle cx="200" cy="200" r="175" stroke-dasharray="1090"/>
                </svg>
            </span>
        </label>
    </header>
    <!-- Main container -->
    <main class="container">
        <div class="cube-container">
            <div class="shadow"></div>
            <div class="cube">
                <!-- Home Page -->
                <div class="face face-1">
                    <img src="/assets/images/icons/home.svg" alt="icone de page d'Accueil" class="icon-section">
                    <section class="face-content home">
                        <?= $presentation["title"] ?>
                        <?= $presentation["content"] ?>
                    </section>
                </div>
                <!-- Project Page -->
                <div class="face face-2">
                    <img src="/assets/images/icons/projects.svg" alt="icone de page des projets" class="icon-section">
                    <section class="face-content projects">
                        <?= $projects["title"] ?>
                        <div class="projects-container">
                            <!-- All projects -->
                             <?php foreach($project as $pr): ?>
                                <article class="project">
                                    <figure class="project-header">
                                        <img src="/assets/images/projects/<?= $pr["image"] ?>" alt="Capture d'écran du site outils pour développeur">
                                        <figcaption>
                                            <?= $pr["title"] ?>
                                            <ul class="tech logos list">
                                                <?php foreach($pr["skills"] as $sk): ?>
                                                <li class="logo">
                                                    <img src="/assets/images/logo/<?= $sk['logo'] ?>" alt="<?= $sk['name'] ?>">
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                    <div class="project-content">
                                        <?= $pr["content"] ?>
                                        <ul class="links list">
                                            <?php if(!empty($pr["link"])): ?>
                                                <li class="link">
                                                    <a href="<?= $pr["link"] ?>" target="_blank">
                                                        <img src="/assets/images/icons/internet.svg" alt="Icone d'internet">
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                            <?php if(!empty($pr["github"])): ?>
                                                <li class="link">
                                                    <a href="<?= $pr["github"] ?>" target="_blank">
                                                        <img src="/assets/images/logo/Github_Logo.svg" alt="Logo de Github">
                                                    </a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </section>                    
                </div>
                <!-- About Page -->
                <div class="face face-3">
                    <img src="/assets/images/icons/about.svg" alt="icone de page à propos" class="icon-section">
                    <section class="face-content about">
                        <?= $whoAmI["title"] ?>
                        <?= $whoAmI["content"] ?>
                        <?= $careerPath["title"] ?>
                        <?= $careerPath["content"] ?>
                        <?= $otherActivities["title"] ?>
                        <?= $otherActivities["content"] ?>
                        <?= $inspirations["title"] ?>
                        <?= $inspirations["content"] ?>
                    </section>
                </div>
                <!-- Skills Page -->
                <div class="face face-4">
                    <img src="/assets/images/icons/skills.svg" alt="icone de page des Compétences" class="icon-section">
                    <section class="face-content skills">
                        <!-- <?= $skills["title"];?> -->
                        <div class="animation-container">
                            <!-- géré l'animation, puis l'apparition, disparition du texte avec input:radio -->
                            <div class="circle">
                                <?php foreach($skills_logo as $logo): ?>
                                    <label class="logo" for="<?= $logo["slug"]?>"><img decoding="async" loading="lazy" data-skill="<?= $logo["name"]?>" src="/assets/images/logo/<?= $logo["logo"]?>" alt="logo <?= $logo["name"]?>" draggable="false"></label>
                                <?php endforeach; ?>
                            </div>
                            <div class="detail-container">
                                <div class="detail-left">
                                    <div class="detail-right">
                                        <article class="detail detail-default">
                                            <input type="radio" name="skill-text" id="skill_default" checked>
                                            <?= $skills["title"]?>
                                            <?= $skills["content"] ?>
                                        </article>
                                        <?php foreach($skill as $sk): ?>
                                            <article class="detail detail-<?= $sk["slug"] ?>">
                                                <input type="radio" name="skill-text" id="<?= $sk["slug"] ?>">
                                                <?= $sk["title"] ?>
                                                <?= $sk["content"] ?>
                                            </article>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Contact Page -->
                <div class="face face-5">
                    <img src="/assets/images/icons/contact.svg" alt="icone de page de Contact" class="icon-section">
                    <section class="face-content contact">
                        <?= $contactMe["title"] ?>
                        <?= $contactMe["content"] ?>
                    </section>
                </div>
                <!-- Gift Page -->
                <div class="face face-6">
                    <img src="/assets/images/icons/other.svg" alt="icone de page de Bonus" class="icon-section">
                    <section class="face-content bonus">
                        <?= $bonus["title"] ?>
                        <?= $bonus["content"] ?>
                    </section>
                </div>
                <!-- Side faces for mobile dice -->
                <div class="face face-7"></div>
                <div class="face face-8"></div>
            </div>
        </div>
    </main>
    <!-- footer -->
    <footer class="portfolio-footer">
        <div class="languages">
            <details>
                <summary><svg><use href="#lang-icons"></use></svg></summary>
                <ul class="lang-list">
                    <li><a href="/dice/fr/"><svg><use href="#flag-icons-fr"></use></svg></a></li>
                    <li><a href="/dice/en/"><svg><use href="#flag-icons-gb"></use></svg></a></li>
                    <li><a href="/dice/jp/"><svg><use href="#flag-icons-jp"></use></svg></a></li>
                </ul>
            </details>
        </div>
    </footer>

    <svg>
        <defs>
            <symbol xmlns="http://www.w3.org/2000/svg" id="flag-icons-fr" viewBox="0 0 640 480">
                <g fill-rule="evenodd" stroke-width="1pt">
                    <path fill="#fff" d="M0 0h640v480H0z"/>
                    <path fill="#002654" d="M0 0h213.3v480H0z"/>
                    <path fill="#ce1126" d="M426.7 0H640v480H426.7z"/>
                </g>
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="flag-icons-jp" viewBox="0 0 640 480">
                <defs>
                    <clipPath id="a">
                        <path fill-opacity=".7" d="M-88 32h640v480H-88z"/>
                    </clipPath>
                </defs>
                <g fill-rule="evenodd" stroke-width="1pt" clip-path="url(#a)" transform="translate(88 -32)">
                    <path fill="#fff" d="M-128 32h720v480h-720z"/>
                    <circle cx="523.1" cy="344.1" r="194.9" fill="#bc002d" transform="translate(-168.4 8.6) scale(.76554)"/>
                </g>
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="flag-icons-gb" viewBox="0 0 640 480">
                <path fill="#012169" d="M0 0h640v480H0z"/>
                <path fill="#FFF" d="m75 0 244 181L562 0h78v62L400 241l240 178v61h-80L320 301 81 480H0v-60l239-178L0 64V0h75z"/>
                <path fill="#C8102E" d="m424 281 216 159v40L369 281h55zm-184 20 6 35L54 480H0l240-179zM640 0v3L391 191l2-44L590 0h50zM0 0l239 176h-60L0 42V0z"/>
                <path fill="#FFF" d="M241 0v480h160V0H241zM0 160v160h640V160H0z"/>
                <path fill="#C8102E" d="M0 193v96h640v-96H0zM273 0v480h96V0h-96z"/>
            </symbol>
            <symbol xmlns="http://www.w3.org/2000/svg" id="lang-icons" viewBox="0 0 640 512">
                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M0 128C0 92.7 28.7 64 64 64H256h48 16H576c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H320 304 256 64c-35.3 0-64-28.7-64-64V128zm320 0V384H576V128H320zM178.3 175.9c-3.2-7.2-10.4-11.9-18.3-11.9s-15.1 4.7-18.3 11.9l-64 144c-4.5 10.1 .1 21.9 10.2 26.4s21.9-.1 26.4-10.2l8.9-20.1h73.6l8.9 20.1c4.5 10.1 16.3 14.6 26.4 10.2s14.6-16.3 10.2-26.4l-64-144zM160 233.2L179 276H141l19-42.8zM448 164c11 0 20 9 20 20v4h44 16c11 0 20 9 20 20s-9 20-20 20h-2l-1.6 4.5c-8.9 24.4-22.4 46.6-39.6 65.4c.9 .6 1.8 1.1 2.7 1.6l18.9 11.3c9.5 5.7 12.5 18 6.9 27.4s-18 12.5-27.4 6.9l-18.9-11.3c-4.5-2.7-8.8-5.5-13.1-8.5c-10.6 7.5-21.9 14-34 19.4l-3.6 1.6c-10.1 4.5-21.9-.1-26.4-10.2s.1-21.9 10.2-26.4l3.6-1.6c6.4-2.9 12.6-6.1 18.5-9.8l-12.2-12.2c-7.8-7.8-7.8-20.5 0-28.3s20.5-7.8 28.3 0l14.6 14.6 .5 .5c12.4-13.1 22.5-28.3 29.8-45H448 376c-11 0-20-9-20-20s9-20 20-20h52v-4c0-11 9-20 20-20z"/>
            </symbol>
        </defs>
    </svg>
</body>
</html>
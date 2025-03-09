<!DOCTYPE html>
<html lang="fr">
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
    <link rel="stylesheet" href="../assets/styles/style.css">
    <link rel="icon" type="image/svg+xml" href="../assets/images/nwm-logo-static-bg-white.svg">
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
                        <span>Accueil</span>
                        <img src="../assets/images/icons/home.svg" alt="icone de page d'Accueil" class="icon-section">
                    </label>
                </li>
                <li class="item-menu-cube-navigation">
                    <label for="f2" class="label-link">
                        <input type="radio" name="faces" id="f2" class="input-link">
                        <span>Projets</span>
                        <img src="../assets/images/icons/projects.svg" alt="icone de page des projets" class="icon-section">
                    </label>
                </li>
                <li class="item-menu-cube-navigation">
                    <label for="f3" class="label-link">
                        <input type="radio" name="faces" id="f3" class="input-link">
                        <span>À propos</span>
                        <img src="../assets/images/icons/about.svg" alt="icone de page à propos" class="icon-section">
                    </label>
                </li>
                <li class="item-menu-cube-navigation">
                    <label for="f4" class="label-link">
                        <input type="radio" name="faces" id="f4" class="input-link">
                        <span>Compétences</span>
                        <img src="../assets/images/icons/skills.svg" alt="icone de page des Compétences" class="icon-section">
                    </label>
                </li>
                <li class="item-menu-cube-navigation">
                    <label for="f5" class="label-link">
                        <input type="radio" name="faces" id="f5" class="input-link">
                        <span>Contact</span>
                        <img src="../assets/images/icons/contact.svg" alt="icone de page de Contact" class="icon-section">
                    </label>
                </li>
                <li class="item-menu-cube-navigation">
                    <label for="f6" class="label-link">
                        <input type="radio" name="faces" id="f6" class="input-link">
                        <span>Bonus</span>
                        <img src="../assets/images/icons/other.svg" alt="icone de page de ???" class="icon-section">
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
                    <img src="../assets/images/icons/home.svg" alt="icone de page d'Accueil" class="icon-section">
                    <section class="face-content home">
                        <?= $presentation["title"] ?>
                        <?= $presentation["content"] ?>
                    </section>
                </div>
                <!-- Project Page -->
                <div class="face face-2">
                    <img src="../assets/images/icons/projects.svg" alt="icone de page des projets" class="icon-section">
                    <section class="face-content projects">
                        <?= $projects["title"] ?>
                        <div class="projects-container">
                            <!-- devtool -->
                            <article class="project">
                                <figure class="project-header">
                                    <img src="../assets/images/projects/devtools.png" alt="Capture d'écran du site outils pour développeur">
                                    <figcaption>
                                        <?= $project_devtool["title"] ?>
                                        <ul class="tech logos list">
                                            <li class="logo">
                                                <img src="../assets/images/logo/HTML5_Logo.svg" alt="Logo HTML 5">
                                            </li>
                                            <li class="logo">
                                                <img src="../assets/images/logo/CSS3_Logo.svg" alt="Logo CSS 3">
                                            </li>
                                            <li class="logo">
                                                <img src="../assets/images/logo/Javascript_Logo.svg" alt="Logo Javascript">
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                                <div class="project-content">
                                    <?= $project_devtool["content"] ?>
                                    <ul class="links list">
                                        <li class="link">
                                            <a href="https://dev.marquiset.fr" target="_blank">
                                                <img src="../assets/images/icons/internet.svg" alt="Icone d'internet">
                                            </a>
                                        </li>
                                        <li class="link">
                                            <a href="https://github.com/NolwennWM/webtool" target="_blank">
                                                <img src="../assets/images/logo/Github_Logo.svg" alt="Logo de Github">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <!-- portfolio angular -->
                            <article class="project">
                                <figure class="project-header">
                                    <img src="../assets/images/projects/devbook.png" alt="Capture d'écran du site les contes d'un développeur">
                                    <figcaption>
                                        <?= $project_portfolioBook["title"] ?>
                                        <ul class="tech logos list">
                                            <li class="logo">
                                                <img src="../assets/images/logo/HTML5_Logo.svg" alt="Logo HTML 5">
                                            </li>
                                            <li class="logo">
                                                <img src="../assets/images/logo/Sass_Logo.svg" alt="Logo SASS">
                                            </li>
                                            <li class="logo">
                                                <img src="../assets/images/logo/Typescript_Logo.svg" alt="Logo Typescript">
                                            </li>
                                            <li class="logo">
                                                <img src="../assets/images/logo/Angular_Logo.svg" alt="Logo Angular">
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                                <div class="project-content">
                                    <?= $project_portfolioBook["content"] ?>
                                    <ul class="links list">
                                        <li class="link">
                                            <a href="https://dev.marquiset.fr/book" target="_blank">
                                                <img src="../assets/images/icons/internet.svg" alt="Icone d'internet">
                                            </a>
                                        </li>
                                        <li class="link">
                                            <a href="https://github.com/NolwennWM/Book-of-Developper" target="_blank">
                                                <img src="../assets/images/logo/Github_Logo.svg" alt="Logo de Github">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <!-- L'effet Lune -->
                            <article class="project">
                                <figure class="project-header">
                                    <img src="../assets/images/projects/leffet_lune.png" alt="Capture d'écran du site les contes d'un développeur">
                                    <figcaption>
                                        <?= $project_effetLune["title"] ?>
                                        <ul class="tech logos list">
                                            <li class="logo">
                                                <img src="../assets/images/logo/HTML5_Logo.svg" alt="Logo HTML 5">
                                            </li>
                                            <li class="logo">
                                                <img src="../assets/images/logo/Sass_Logo.svg" alt="Logo SASS">
                                            </li>
                                            <li class="logo">
                                                <img src="../assets/images/logo/Typescript_Logo.svg" alt="Logo Typescript">
                                            </li>
                                            <li class="logo">
                                                <img src="../assets/images/logo/PHP_Logo.svg" alt="Logo PHP">
                                            </li>
                                            <li class="logo">
                                                <img src="../assets/images/logo/Wordpress_Logo.svg" alt="Logo Wordpress">
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                                <div class="project-content">
                                    <?= $project_effetLune["content"] ?>
                                    <ul class="links list">
                                        <li class="link">
                                            <a href="https://leffetlune.com/" target="_blank">
                                                <img src="../assets/images/icons/internet.svg" alt="Icone d'internet">
                                            </a>
                                        </li>
                                        <li class="link">
                                            <a href="https://github.com/NolwennWM/L-effet-Lune" target="_blank">
                                                <img src="../assets/images/logo/Github_Logo.svg" alt="Logo de Github">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <!-- Multistream -->
                            <article class="project">
                                <figure class="project-header">
                                    <img src="../assets/images/projects/multistream.png" alt="Capture d'écran du site les contes d'un développeur">
                                    <figcaption>
                                        <?= $project_aeiouStream["title"] ?>
                                        <ul class="tech logos list">
                                            <li class="logo">
                                                <img src="../assets/images/logo/HTML5_Logo.svg" alt="Logo HTML 5">
                                            </li>
                                            <li class="logo">
                                                <img src="../assets/images/logo/CSS3_Logo.svg" alt="Logo CSS 3">
                                            </li>
                                            <li class="logo">
                                                <img src="../assets/images/logo/Javascript_Logo.svg" alt="Logo Javascript">
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                                <div class="project-content">
                                    <?= $project_aeiouStream["content"] ?>
                                    <ul class="links list">
                                        <li class="link">
                                            <a href="https://github.com/NolwennWM/aeiou-stream-web" target="_blank">
                                                <img src="../assets/images/logo/Github_Logo.svg" alt="Logo de Github">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            <!-- galerie photo -->
                            <article class="project">
                                <figure class="project-header">
                                    <img src="../assets/images/projects/galerie.png" alt="Capture d'écran du site outils pour développeur">
                                    <figcaption>
                                        <?= $project_galery["title"] ?>
                                        <ul class="tech logos list">
                                            <li class="logo">
                                                <img src="../assets/images/logo/Piwigo_Logo.svg" alt="Logo Piwigo">
                                            </li>
                                        </ul>
                                    </figcaption>
                                </figure>
                                <div class="project-content">
                                    <?= $project_galery["content"] ?>
                                    <ul class="links list">
                                        <li class="link">
                                            <a href="https://photo.marquiset.fr" target="_blank">
                                                <img src="../assets/images/icons/internet.svg" alt="Icone d'internet">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </div>
                    </section>                    
                </div>
                <!-- About Page -->
                <div class="face face-3">
                    <img src="../assets/images/icons/about.svg" alt="icone de page à propos" class="icon-section">
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
                    <img src="../assets/images/icons/skills.svg" alt="icone de page des Compétences" class="icon-section">
                    <section class="face-content skills">
                        <?= $skills["title"] ?>
                        <div class="animation-container">
                            <!-- géré l'animation, puis l'apparition, disparition du texte avec input:radio -->
                            <div class="circle">
                                <label class="logo" for="skill-html"><img decoding="async" loading="lazy" data-skill="html" src="../assets/images/logo/HTML5_Logo.svg" alt="logo HTML 5" draggable="false"></label>
                                <label class="logo" for="skill-css"><img decoding="async" loading="lazy" data-skill="css" src="../assets/images/logo/CSS3_Logo.svg" alt="logo CSS 3" draggable="false"></label>
                                <label class="logo" for="skill-sass"><img decoding="async" loading="lazy" data-skill="sass" src="../assets/images/logo/Sass_Logo.svg" alt="logo SASS" draggable="false"></label>
                                <label class="logo" for="skill-js"><img decoding="async" loading="lazy" data-skill="js" src="../assets/images/logo/Javascript_Logo.svg" alt="logo Javascript" draggable="false"></label>
                                <label class="logo" for="skill-jquery"><img decoding="async" loading="lazy" data-skill="jquery" src="../assets/images/logo/JQuery_Logo.svg" alt="logo JQuery" draggable="false"></label>
                                <label class="logo" for="skill-typescript"><img decoding="async" loading="lazy" data-skill="ts" src="../assets/images/logo/Typescript_Logo.svg" alt="logo Typescript" draggable="false"></label>
                                <label class="logo" for="skill-angular"><img decoding="async" loading="lazy" data-skill="angular" src="../assets/images/logo/Angular_Logo.svg" alt="logo Angular" draggable="false"></label>
                                <label class="logo" for="skill-mysql"><img decoding="async" loading="lazy" data-skill="mysql" src="../assets/images/logo/MySQL_Logo.svg" alt="logo MySQL" draggable="false"></label>
                                <label class="logo" for="skill-php"><img decoding="async" loading="lazy" data-skill="php" src="../assets/images/logo/PHP_Logo.svg" alt="logo PHP" draggable="false"></label>
                                <label class="logo" for="skill-symfony"><img decoding="async" loading="lazy" data-skill="symfony" src="../assets/images/logo/Symfony_logo.svg" alt="logo Symfony" draggable="false"></label>
                            </div>
                            <div class="detail-container">
                                <div class="detail-left">
                                    <div class="detail-right">
                                        <article class="detail detail-html">
                                            <input type="radio" name="skill-text" id="skill-html" checked>
                                            <?= $skill_html["title"] ?>
                                            <?= $skill_html["content"] ?>
                                        </article>
                                        <article class="detail detail-css">
                                            <input type="radio" name="skill-text" id="skill-css">
                                            <?= $skill_css["title"] ?>
                                            <?= $skill_css["content"] ?>
                                        </article>
                                        <article class="detail detail-sass">
                                            <input type="radio" name="skill-text" id="skill-sass">
                                            <?= $skill_sass["title"] ?>
                                            <?= $skill_sass["content"] ?>
                                        </article>
                                        <article class="detail detail-javascript">
                                            <input type="radio" name="skill-text" id="skill-js">
                                            <?= $skill_js["title"] ?>
                                            <?= $skill_js["content"] ?>
                                        </article>
                                        <article class="detail detail-jquery">
                                            <input type="radio" name="skill-text" id="skill-jquery">
                                            <?= $skill_jquery["title"] ?>
                                            <?= $skill_jquery["content"] ?>
                                        </article>
                                        <article class="detail detail-typescript">
                                            <input type="radio" name="skill-text" id="skill-typescript">
                                            <?= $skill_typescript["title"] ?>
                                            <?= $skill_typescript["content"] ?>
                                        </article>
                                        <article class="detail detail-angular">
                                            <input type="radio" name="skill-text" id="skill-angular">
                                            <?= $skill_angular["title"] ?>
                                            <?= $skill_angular["content"] ?>
                                        </article>
                                        <article class="detail detail-mysql">
                                            <input type="radio" name="skill-text" id="skill-mysql">
                                            <?= $skill_mysql["title"] ?>
                                            <?= $skill_mysql["content"] ?>
                                        </article>
                                        <article class="detail detail-php">
                                            <input type="radio" name="skill-text" id="skill-php">
                                            <?= $skill_php["title"] ?>
                                            <?= $skill_php["content"] ?>
                                        </article>
                                        <article class="detail detail-symfony">
                                            <input type="radio" name="skill-text" id="skill-symfony">
                                            <?= $skill_symfony["title"] ?>
                                            <?= $skill_symfony["content"] ?>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- Contact Page -->
                <div class="face face-5">
                    <img src="../assets/images/icons/contact.svg" alt="icone de page de Contact" class="icon-section">
                    <section class="face-content contact">
                        <?= $contactMe["title"] ?>
                        <?= $contactMe["content"] ?>
                    </section>
                </div>
                <!-- Gift Page -->
                <div class="face face-6">
                    <img src="../assets/images/icons/other.svg" alt="icone de page de ???" class="icon-section">
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
    
</body>
</html>
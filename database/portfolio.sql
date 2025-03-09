/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.7.2-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: portfolio
-- ------------------------------------------------------
-- Server version	11.7.2-MariaDB-ubu2404

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

DROP DATABASE IF EXISTS portfolio;

CREATE DATABASE portfolio;

USE portfolio;

--
-- Table structure for table `page_content`
--

DROP TABLE IF EXISTS `page_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `page_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) NOT NULL, 
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `language` char(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE(`slug`, `language`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_content`
--

LOCK TABLES `page_content` WRITE;
/*!40000 ALTER TABLE `page_content` DISABLE KEYS */;

-- INSERT INTO `page_content` (slug, title, content, language) VALUES ('test', 'test', 'test', 'fr'); 
INSERT INTO `page_content` (slug, title, content, language) VALUES 
('presentation','<h2>Présentation</h2>','<p><img src="../assets/images/photo-min.jpg" alt="Photo de Nolwenn" class="profile-photo"> Bonjour, je suis Nolwenn WEBER-MARQUISET. <br> Développeur web et web mobile.</p><p>Je développe habituellement en JS et PHP mais pour ce site j\'ai décidé de me lancer le challenge de ne faire que du HTML et du CSS, pour un plus grand détail je vous invite à rejoindre la page <label for="f4" class="intern-link">"compétences"</label>. <br> Vous trouverez aussi mon portfolio sous forme de livre de conte à l\'adresse suivante : <br> <a href=\"/book\">Les Contes d\'un Développeur</a> </p><p>Toute les images et logo de ce site sont de ma création, excepté les logos des langages et outils de développement qui ont été récupéré sur <a href="https://commons.wikimedia.org/wiki/Main_Page" target="_blank">Wikimedia Commons</a>.</p>','fr'),
('whoAmI', '<h2>Qui suis-je ?</h2>', '<p>Nolwenn WEBER-MARQUISET, un développeur aux multiples compétences pour vous servir.</p>', 'fr'),
('careerPath', '<h3>Parcours Professionnel</h3>', '<p>Passionné par la création en tout genre. Que ce soit artistique, artisanal, ou la programmation, je me suis naturellement orienté vers cette dernière qui me permet à la fois de laisser libre cours à mon imagination tout en m\'offrant des défis et des énigmes des plus excquises. <br> J\'ai développé mon premier site internet un peu avant 2010, bien qu\'à cette époque je touchais au développement comme un loisir, PHP, Python étaient des jouet à mes yeux. <br> J\'ai décidé de professionnalisé ce loisir que bien plus tard en 2018 et j\'ai obtenu mon premier titre professionnel de développeur web et web mobile en 2019. <br> Bien que j\'ai travaillé pour de multiples entreprises, la seule experience qui mérite d\'être citée ici est la suivante : <br> Depuis 2021 je suis formateur en Développement web et web mobile à l\'<abbr title="Agence de Formation et de Conseil en Insertion">AFCI</abbr>. Ce métier m\'a apporté de nombreuses connaissances et la mise en place de veilles technologiques effices afin de toujours apporter les meilleurs connaissances à mes stagiaires.</p>', 'fr'),
('otherActivities', '<h3>Activités Extra-Professionnelles</h3>', '<p>J\'ai été membre de plusieurs groupes et associations et j\'ai participé à l\'organisation de nombreux évènements.</p> <h4>L\'Association "Japon et Culture" <a href="https://www.japon-culture.com" target="_blank"> <img src="../assets/images/icons/internet.svg" alt="Icone d\'internet" class="external-link-icon"> </a> </h4> <p> Cette association à pour but de promouvoir la culture japonaise. Si son commité d\'administration est composé de bénévoles français. Les cours de langue et autres qui sont enseignés par cette association sont tenus par des employés d\'origine japonaise. <br> Si j\'y ai commencé comme simple membre, cela fait maintenant plusieurs années que j\'y agis au titre de vice-trésorier. </p> <h4> L\'Association "Les irrécupérables du jeu de rôle" <a href="https://www.facebook.com/profile.php?id=61556202272484&locale=fr_FR" target="_blank"> <img src="../assets/images/icons/internet.svg" alt="Icone d\'internet" class="external-link-icon"> </a> </h4> <p> Association de jeu de rôle et de grandeur nature. J\'y ai là aussi commencé en tant que simple membre avant d\'en devenir vice-président pour soutenir le président et aider à organiser les évènements. <br>  Je me suis occupé de la relation avec les marchands qui venaient sur nos évènements (entre 30 et 50 marchands par évènements) ainsi que de leurs placement. <br> J\'ai fini par laisser ma place de vice-président en 2023 à quelqu\'un de plus interessé par cette place, puis en 2024 j\'ai laissé ma place à l\'organisation des évènements afin d\'avoir plus de temps à accorder à la programmation. </p>', 'fr'),
('inspirations', '<h3>Inspirations</h3>', '<p> Pour avoir une idée de ce que je peux avoir en tête, voici les personnes célèbres qui m\'inspirent le plus chacun à leur façon : </p> <ul> <li>Terry Pratchett</li> <li>Masahiro Sakurai (桜井 政博)</li> <li>Benoît Theveny</li> </ul>', 'fr'),
('contactMe', '<h2>Me Contacter :</h2>', '<p> Ce site se voulant uniquement en HTML et CSS, pas de formulaire de contact. <br> J\'ajouterais d\'autres façons de me contacter par la suite, mais pour l\'instant je vous invite à me contacter sur Linkedin. <br> <a href="https://www.linkedin.com/in/nolwenn-weber-marquiset-7a3349162/" target="_blank"><img src="../assets/images/logo/Linkedin_Logo.svg" alt="logo de linkedin"></a> </p>', 'fr'),
('projects', '<h2>Projets :</h2>', '<p>Liste de projets que j\'ai pu réaliser</p>', 'fr'),
('project_devtool', '<h3>Outils pour Développeur</h3>', '<p>Ce site regroupe des outils utiles au développement front-end.</p>', 'fr'),
('project_portfolioBook', '<h3>Les Contes d\'un Développeur</h3>', '<p>Une version de mon portfolio. Celle-ci est sous forme de livre de conte. Réalisé avec Angular.</p>', 'fr'),
('project_portfolioDice', '<h3>Les dés d\'un Développeur</h3>', '<p>Une version de mon portfolio. Celle ci est sous forme de dés à lancer. Réalisé sans Javascript.</p>', 'fr'),
('project_effetLune', '<h3>L\'Effet Lune</h3>', '<p> Site fait sous wordpress avec WooCommerce. Le thème est fait depuis zero sans outils nocode. <br> Seul le thème est disponible sur github. </p>', 'fr'),
('project_aeiouStream', '<h3>Aeiou Stream</h3>', '<p>Site regroupant plusieurs lecteur video pour du streaming. <br> Les lecteurs sont ceux du github de <a href="https://github.com/AirenSoft/OvenPlayer" target="_blank">OvenPlayer</a>. <br> Seul l\'interface multistream est de mon oeuvre. <br> Le projet étant fait pour être utilisé entre amis, le site ne sera pas révélé. </p>', 'fr'),
('project_galery', '<h3>Galerie Photo</h3>', '<p> Galerie photo de mes voyages. <br> Car il faut savoir parfois ne pas réinventer la roue, ce site est fait avec le CMS Piwigo. </p>', 'fr'),
('skills', '<h2>Mes Compétences :</h2>', '<p>Voici certaines de mes compétences</p>', 'fr'),
('skill_html', '<h3>HTML</h3>', '<p> HTML, la base de tout site, j\'ai appris à m\'en servir il y a plus de 15 ans et je continue toujours d\'apprendre. <br>  Cliquez sur une des icones pour plus d\'information. </p>', 'fr'),
('skill_css', '<h3>CSS</h3>', '<p> Je possède de bien meilleurs qualités que le design. Cela dit, donnez moi n\'importe quelle maquette et je vous la reproduirais sans problème. </p>', 'fr'),
('skill_sass', '<h3>SASS</h3>', '<p> Il apporte des outils si pratique que plus d\'un furent et continue d\'être intégré à CSS. <br> Vive le nesting. </p>', 'fr'),
('skill_js', '<h3>Javascript</h3>', '<p> Pour beaucoup de développeur, une des premières rencontres avec les algorithmes (la mienne fut en Python). <br> Indispensable pour bien des sites, que ce soit en procedural ou en POO, je vous coderais ce que vous souhaitez. </p>', 'fr'),
('skill_jquery', '<h3>JQuery</h3>', '<p> Ce vieil ami à mes débuts en Javascript n\'est plus aussi populaire qu\'il le fut. Bien que j\'ai aussi choisi de ne plus l\'utiliser, il est pratique de le connaître car on le croise encore souvent en exemple ou sur d\'ancien sites ayant besoin d\'une mise à jour. </p>', 'fr'),
('skill_typescript', '<h3>Typescript</h3>', '<p> Quand javascript devient trop brouillon pour un gros projet, l\'ami Typescript vient à la rescousse, apportant ce qu\'il manque à javascript pour devenir un langage serieux. </p>', 'fr'),
('skill_angular', '<h3>Angular</h3>', '<p> De tous les frameworks et libraries que j\'ai pu testé pour la création de SPA, Angular est celle qui me convient le mieux. <br> Sûrement grâce à son code orienté objet et les atouts de Typescript. </p>', 'fr'),
('skill_mysql', '<h3>MySQL</h3>', '<p> En vrai, MariaDB. Quoi qu\'il en soit si il a pu m\'arriver d\'utiliser d\'autres bases de données comme du NoSQL avec MongoDB, j\'en reviens toujours à la structure si pratique du SQL. <br> J\'aime que les choses soient claires et bien triées. </p>', 'fr'),
('skill_php', '<h3>PHP</h3>', '<p> En perte de popularité, peut être mais toujours le roi du web. La majorité des sites tournent grâce à lui. Si je peux m\'aventurer parfois sur d\'autres voies avec plaisir, comme celle de NodeJS ou de Python; <br> Lorsque je veux un projet solide, ma maison est celle de PHP. </p>', 'fr'),
('skill_symfony', '<h3>Symfony</h3>', '<p> Sécurisé, complet, peut être un peu lourd, cela reste quand même bien pratique de pouvoir réaliser pages, routes, formulaires et multiples autres tâches répétitives rapidement pour se concentrer sur le coeur du projet. </p>', 'fr'),
('bonus', '<h2>Bonus :</h2>', '<p>Revenez plus tard et des secrets apparaîtrons ici.</p>', 'fr');
-- ('', '', '', 'fr')
/*!40000 ALTER TABLE `page_content` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2025-03-08 22:24:36

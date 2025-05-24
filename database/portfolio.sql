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
-- Table structure for table `admin`
-- Table pour la connexion administrateur
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_content`
-- Table pour le contenu des différentes pages et différentes langues
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
  UNIQUE KEY `slug` (`slug`,`language`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_content`
-- Contenu des pages
--

LOCK TABLES `page_content` WRITE;
/*!40000 ALTER TABLE `page_content` DISABLE KEYS */;
INSERT INTO `page_content` VALUES
(1,'presentation','<h2>Présentation</h2>','<p><img src=\"../assets/images/photo-min.jpg\" alt=\"Photo de Nolwenn\" class=\"profile-photo\"> Bonjour, je suis Nolwenn WEBER-MARQUISET. <br> Développeur web et web mobile.</p><p>Je développe habituellement en JS et PHP mais pour ce site j\'ai décidé de me lancer le challenge de ne faire que du HTML et du CSS, pour un plus grand détail je vous invite à rejoindre la page <label for=\"f4\" class=\"intern-link\">\"compétences\"</label>. <br> Vous trouverez aussi mon portfolio sous forme de livre de conte à l\'adresse suivante : <br> <a href=\"/book\">Les Contes d\'un Développeur</a> </p><p>Toute les images et logo de ce site sont de ma création, excepté les logos des langages et outils de développement qui ont été récupéré sur <a href=\"https://commons.wikimedia.org/wiki/Main_Page\" target=\"_blank\">Wikimedia Commons</a>.</p>','fr'),
(2,'whoAmI','<h2>Qui suis-je ?</h2>','<p>Nolwenn WEBER-MARQUISET, un développeur aux multiples compétences pour vous servir.</p>','fr'),
(3,'careerPath','<h3>Parcours Professionnel</h3>','<p>Passionné par la création en tout genre. Que ce soit artistique, artisanal, ou la programmation, je me suis naturellement orienté vers cette dernière qui me permet à la fois de laisser libre cours à mon imagination tout en m\'offrant des défis et des énigmes des plus excquises. <br> J\'ai développé mon premier site internet un peu avant 2010, bien qu\'à cette époque je touchais au développement comme un loisir, PHP, Python étaient des jouet à mes yeux. <br> J\'ai décidé de professionnalisé ce loisir que bien plus tard en 2018 et j\'ai obtenu mon premier titre professionnel de développeur web et web mobile en 2019. <br> Bien que j\'ai travaillé pour de multiples entreprises, la seule experience qui mérite d\'être citée ici est la suivante : <br> Depuis 2021 je suis formateur en Développement web et web mobile à l\'<abbr title=\"Agence de Formation et de Conseil en Insertion\">AFCI</abbr>. Ce métier m\'a apporté de nombreuses connaissances et la mise en place de veilles technologiques effices afin de toujours apporter les meilleurs connaissances à mes stagiaires.</p>','fr'),
(4,'otherActivities','<h3>Activités Extra-Professionnelles</h3>','<p>J\'ai été membre de plusieurs groupes et associations et j\'ai participé à l\'organisation de nombreux évènements.</p> <h4>L\'Association \"Japon et Culture\" <a href=\"https://www.japon-culture.com\" target=\"_blank\"> <img src=\"../assets/images/icons/internet.svg\" alt=\"Icone d\'internet\" class=\"external-link-icon\"> </a> </h4> <p> Cette association à pour but de promouvoir la culture japonaise. Si son commité d\'administration est composé de bénévoles français. Les cours de langue et autres qui sont enseignés par cette association sont tenus par des employés d\'origine japonaise. <br> Si j\'y ai commencé comme simple membre, cela fait maintenant plusieurs années que j\'y agis au titre de vice-trésorier. </p> <h4> L\'Association \"Les irrécupérables du jeu de rôle\" <a href=\"https://www.facebook.com/profile.php?id=61556202272484&locale=fr_FR\" target=\"_blank\"> <img src=\"../assets/images/icons/internet.svg\" alt=\"Icone d\'internet\" class=\"external-link-icon\"> </a> </h4> <p> Association de jeu de rôle et de grandeur nature. J\'y ai là aussi commencé en tant que simple membre avant d\'en devenir vice-président pour soutenir le président et aider à organiser les évènements. <br>  Je me suis occupé de la relation avec les marchands qui venaient sur nos évènements (entre 30 et 50 marchands par évènements) ainsi que de leurs placement. <br> J\'ai fini par laisser ma place de vice-président en 2023 à quelqu\'un de plus interessé par cette place, puis en 2024 j\'ai laissé ma place à l\'organisation des évènements afin d\'avoir plus de temps à accorder à la programmation. </p>','fr'),
(5,'inspirations','<h3>Inspirations</h3>','<p> Pour avoir une idée de ce que je peux avoir en tête, voici les personnes célèbres qui m\'inspirent le plus chacun à leur façon : </p> <ul> <li>Terry Pratchett</li> <li>Masahiro Sakurai (桜井 政博)</li> <li>Benoît Theveny</li> </ul>','fr'),
(6,'contactMe','<h2>Me Contacter :</h2>','<p> Ce site se voulant uniquement en HTML et CSS, pas de formulaire de contact. <br> J\'ajouterais d\'autres façons de me contacter par la suite, mais pour l\'instant je vous invite à me contacter sur Linkedin. <br> <a href=\"https://www.linkedin.com/in/nolwenn-weber-marquiset-7a3349162/\" target=\"_blank\"><img src=\"../assets/images/logo/Linkedin_Logo.svg\" alt=\"logo de linkedin\"></a> </p>','fr'),
(7,'projects','<h2>Projets :</h2>','<p>Liste de projets que j\'ai pu réaliser</p>','fr'),
(8,'project_dev_tools','<h3>Outils pour Développeur</h3>','<p>Ce site regroupe des outils utiles au développement front-end.</p>','fr'),
(9,'project_portfolio_book','<h3>Les Contes d\'un Développeur</h3>','<p>Une version de mon portfolio. Celle-ci est sous forme de livre de conte. Réalisé avec Angular.</p>','fr'),
(10,'project_portfolio_dice','<h3>Les dés d\'un Développeur</h3>','<p>Une version de mon portfolio. Celle ci est sous forme de dés à lancer. Réalisé sans Javascript.</p>','fr'),
(11,'project_effet_lune','<h3>L\'Effet Lune</h3>','<p> Site fait sous wordpress avec WooCommerce. Le thème est fait depuis zero sans outils nocode. <br> Seul le thème est disponible sur github. </p>','fr'),
(12,'project_aeiou_stream','<h3>Aeiou Stream</h3>','<p>Site regroupant plusieurs lecteur video pour du streaming. <br> Les lecteurs sont ceux du github de <a href=\"https://github.com/AirenSoft/OvenPlayer\" target=\"_blank\">OvenPlayer</a>. <br> Seul l\'interface multistream est de mon oeuvre. <br> Le projet étant fait pour être utilisé entre amis, le site ne sera pas révélé. </p>','fr'),
(13,'project_piwigo_galery','<h3>Galerie Photo</h3>','<p> Galerie photo de mes voyages. <br> Car il faut savoir parfois ne pas réinventer la roue, ce site est fait avec le CMS Piwigo. </p>','fr'),
(14,'skills','<h2>Mes Compétences :</h2>','<p>Voici certaines de mes compétences</p>','fr'),
(15,'skill_html','<h3>HTML</h3>','<p> HTML, la base de tout site, j\'ai appris à m\'en servir il y a plus de 15 ans et je continue toujours d\'apprendre. <br>  Cliquez sur une des icones pour plus d\'information. </p>','fr'),
(16,'skill_css','<h3>CSS</h3>','<p> Je possède de bien meilleurs qualités que le design. Cela dit, donnez moi n\'importe quelle maquette et je vous la reproduirais sans problème. </p>','fr'),
(17,'skill_sass','<h3>SASS</h3>','<p> Il apporte des outils si pratique que plus d\'un furent et continue d\'être intégré à CSS. <br> Vive le nesting. </p>','fr'),
(18,'skill_js','<h3>Javascript</h3>','<p> Pour beaucoup de développeur, une des premières rencontres avec les algorithmes (la mienne fut en Python). <br> Indispensable pour bien des sites, que ce soit en procedural ou en POO, je vous coderais ce que vous souhaitez. </p>','fr'),
(19,'skill_jquery','<h3>JQuery</h3>','<p> Ce vieil ami à mes débuts en Javascript n\'est plus aussi populaire qu\'il le fut. Bien que j\'ai aussi choisi de ne plus l\'utiliser, il est pratique de le connaître car on le croise encore souvent en exemple ou sur d\'ancien sites ayant besoin d\'une mise à jour. </p>','fr'),
(20,'skill_typescript','<h3>Typescript</h3>','<p> Quand javascript devient trop brouillon pour un gros projet, l\'ami Typescript vient à la rescousse, apportant ce qu\'il manque à javascript pour devenir un langage serieux. </p>','fr'),
(21,'skill_angular','<h3>Angular</h3>','<p> De tous les frameworks et libraries que j\'ai pu testé pour la création de SPA, Angular est celle qui me convient le mieux. <br> Sûrement grâce à son code orienté objet et les atouts de Typescript. </p>','fr'),
(22,'skill_mysql','<h3>MySQL</h3>','<p> En vrai, MariaDB. Quoi qu\'il en soit si il a pu m\'arriver d\'utiliser d\'autres bases de données comme du NoSQL avec MongoDB, j\'en reviens toujours à la structure si pratique du SQL. <br> J\'aime que les choses soient claires et bien triées. </p>','fr'),
(23,'skill_php','<h3>PHP</h3>','<p> En perte de popularité, peut être mais toujours le roi du web. La majorité des sites tournent grâce à lui. Si je peux m\'aventurer parfois sur d\'autres voies avec plaisir, comme celle de NodeJS ou de Python; <br> Lorsque je veux un projet solide, ma maison est celle de PHP. </p>','fr'),
(24,'skill_symfony','<h3>Symfony</h3>','<p> Sécurisé, complet, peut être un peu lourd, cela reste quand même bien pratique de pouvoir réaliser pages, routes, formulaires et multiples autres tâches répétitives rapidement pour se concentrer sur le coeur du projet. </p>','fr'),
(25,'bonus','<h2>Bonus :</h2>','<p>Revenez plus tard et des secrets apparaîtrons ici.</p>','fr'),
-- Anglais
(26,'presentation','<h2>Présentation</h2>','<p><img src=\"../assets/images/photo-min.jpg\" alt=\"Photo de Nolwenn\" class=\"profile-photo\"> Bonjour, je suis Nolwenn WEBER-MARQUISET. <br> Développeur web et web mobile.</p><p>Je développe habituellement en JS et PHP mais pour ce site j\'ai décidé de me lancer le challenge de ne faire que du HTML et du CSS, pour un plus grand détail je vous invite à rejoindre la page <label for=\"f4\" class=\"intern-link\">\"compétences\"</label>. <br> Vous trouverez aussi mon portfolio sous forme de livre de conte à l\'adresse suivante : <br> <a href=\"/book\">Les Contes d\'un Développeur</a> </p><p>Toute les images et logo de ce site sont de ma création, excepté les logos des langages et outils de développement qui ont été récupéré sur <a href=\"https://commons.wikimedia.org/wiki/Main_Page\" target=\"_blank\">Wikimedia Commons</a>.</p>','en'),
(27,'whoAmI','<h2>Qui suis-je ?</h2>','<p>Nolwenn WEBER-MARQUISET, un développeur aux multiples compétences pour vous servir.</p>','en'),
(28,'careerPath','<h3>Parcours Professionnel</h3>','<p>Passionné par la création en tout genre. Que ce soit artistique, artisanal, ou la programmation, je me suis naturellement orienté vers cette dernière qui me permet à la fois de laisser libre cours à mon imagination tout en m\'offrant des défis et des énigmes des plus excquises. <br> J\'ai développé mon premier site internet un peu avant 2010, bien qu\'à cette époque je touchais au développement comme un loisir, PHP, Python étaient des jouet à mes yeux. <br> J\'ai décidé de professionnalisé ce loisir que bien plus tard en 2018 et j\'ai obtenu mon premier titre professionnel de développeur web et web mobile en 2019. <br> Bien que j\'ai travaillé pour de multiples entreprises, la seule experience qui mérite d\'être citée ici est la suivante : <br> Depuis 2021 je suis formateur en Développement web et web mobile à l\'<abbr title=\"Agence de Formation et de Conseil en Insertion\">AFCI</abbr>. Ce métier m\'a apporté de nombreuses connaissances et la mise en place de veilles technologiques effices afin de toujours apporter les meilleurs connaissances à mes stagiaires.</p>','en'),
(29,'otherActivities','<h3>Activités Extra-Professionnelles</h3>','<p>J\'ai été membre de plusieurs groupes et associations et j\'ai participé à l\'organisation de nombreux évènements.</p> <h4>L\'Association \"Japon et Culture\" <a href=\"https://www.japon-culture.com\" target=\"_blank\"> <img src=\"../assets/images/icons/internet.svg\" alt=\"Icone d\'internet\" class=\"external-link-icon\"> </a> </h4> <p> Cette association à pour but de promouvoir la culture japonaise. Si son commité d\'administration est composé de bénévoles français. Les cours de langue et autres qui sont enseignés par cette association sont tenus par des employés d\'origine japonaise. <br> Si j\'y ai commencé comme simple membre, cela fait maintenant plusieurs années que j\'y agis au titre de vice-trésorier. </p> <h4> L\'Association \"Les irrécupérables du jeu de rôle\" <a href=\"https://www.facebook.com/profile.php?id=61556202272484&locale=fr_FR\" target=\"_blank\"> <img src=\"../assets/images/icons/internet.svg\" alt=\"Icone d\'internet\" class=\"external-link-icon\"> </a> </h4> <p> Association de jeu de rôle et de grandeur nature. J\'y ai là aussi commencé en tant que simple membre avant d\'en devenir vice-président pour soutenir le président et aider à organiser les évènements. <br>  Je me suis occupé de la relation avec les marchands qui venaient sur nos évènements (entre 30 et 50 marchands par évènements) ainsi que de leurs placement. <br> J\'ai fini par laisser ma place de vice-président en 2023 à quelqu\'un de plus interessé par cette place, puis en 2024 j\'ai laissé ma place à l\'organisation des évènements afin d\'avoir plus de temps à accorder à la programmation. </p>','en'),
(30,'inspirations','<h3>Inspirations</h3>','<p> Pour avoir une idée de ce que je peux avoir en tête, voici les personnes célèbres qui m\'inspirent le plus chacun à leur façon : </p> <ul> <li>Terry Pratchett</li> <li>Masahiro Sakurai (桜井 政博)</li> <li>Benoît Theveny</li> </ul>','en'),
(31,'contactMe','<h2>Me Contacter :</h2>','<p> Ce site se voulant uniquement en HTML et CSS, pas de formulaire de contact. <br> J\'ajouterais d\'autres façons de me contacter par la suite, mais pour l\'instant je vous invite à me contacter sur Linkedin. <br> <a href=\"https://www.linkedin.com/in/nolwenn-weber-marquiset-7a3349162/\" target=\"_blank\"><img src=\"../assets/images/logo/Linkedin_Logo.svg\" alt=\"logo de linkedin\"></a> </p>','en'),
(32,'projects','<h2>Projets :</h2>','<p>Liste de projets que j\'ai pu réaliser</p>','en'),
(33,'project_dev_tools','<h3>Outils pour Développeur</h3>','<p>Ce site regroupe des outils utiles au développement front-end.</p>','en'),
(34,'project_portfolio_book','<h3>Les Contes d\'un Développeur</h3>','<p>Une version de mon portfolio. Celle-ci est sous forme de livre de conte. Réalisé avec Angular.</p>','en'),
(35,'project_portfolio_dice','<h3>Les dés d\'un Développeur</h3>','<p>Une version de mon portfolio. Celle ci est sous forme de dés à lancer. Réalisé sans Javascript.</p>','en'),
(36,'project_effet_lune','<h3>L\'Effet Lune</h3>','<p> Site fait sous wordpress avec WooCommerce. Le thème est fait depuis zero sans outils nocode. <br> Seul le thème est disponible sur github. </p>','en'),
(37,'project_aeiou_stream','<h3>Aeiou Stream</h3>','<p>Site regroupant plusieurs lecteur video pour du streaming. <br> Les lecteurs sont ceux du github de <a href=\"https://github.com/AirenSoft/OvenPlayer\" target=\"_blank\">OvenPlayer</a>. <br> Seul l\'interface multistream est de mon oeuvre. <br> Le projet étant fait pour être utilisé entre amis, le site ne sera pas révélé. </p>','en'),
(38,'project_piwigo_galery','<h3>Galerie Photo</h3>','<p> Galerie photo de mes voyages. <br> Car il faut savoir parfois ne pas réinventer la roue, ce site est fait avec le CMS Piwigo. </p>','en'),
(39,'skills','<h2>Mes Compétences :</h2>','<p>Voici certaines de mes compétences</p>','en'),
(40,'skill_html','<h3>HTML</h3>','<p> HTML, la base de tout site, j\'ai appris à m\'en servir il y a plus de 15 ans et je continue toujours d\'apprendre. <br>  Cliquez sur une des icones pour plus d\'information. </p>','en'),
(41,'skill_css','<h3>CSS</h3>','<p> Je possède de bien meilleurs qualités que le design. Cela dit, donnez moi n\'importe quelle maquette et je vous la reproduirais sans problème. </p>','en'),
(42,'skill_sass','<h3>SASS</h3>','<p> Il apporte des outils si pratique que plus d\'un furent et continue d\'être intégré à CSS. <br> Vive le nesting. </p>','en'),
(43,'skill_js','<h3>Javascript</h3>','<p> Pour beaucoup de développeur, une des premières rencontres avec les algorithmes (la mienne fut en Python). <br> Indispensable pour bien des sites, que ce soit en procedural ou en POO, je vous coderais ce que vous souhaitez. </p>','en'),
(44,'skill_jquery','<h3>JQuery</h3>','<p> Ce vieil ami à mes débuts en Javascript n\'est plus aussi populaire qu\'il le fut. Bien que j\'ai aussi choisi de ne plus l\'utiliser, il est pratique de le connaître car on le croise encore souvent en exemple ou sur d\'ancien sites ayant besoin d\'une mise à jour. </p>','en'),
(45,'skill_typescript','<h3>Typescript</h3>','<p> Quand javascript devient trop brouillon pour un gros projet, l\'ami Typescript vient à la rescousse, apportant ce qu\'il manque à javascript pour devenir un langage serieux. </p>','en'),
(46,'skill_angular','<h3>Angular</h3>','<p> De tous les frameworks et libraries que j\'ai pu testé pour la création de SPA, Angular est celle qui me convient le mieux. <br> Sûrement grâce à son code orienté objet et les atouts de Typescript. </p>','en'),
(47,'skill_mysql','<h3>MySQL</h3>','<p> En vrai, MariaDB. Quoi qu\'il en soit si il a pu m\'arriver d\'utiliser d\'autres bases de données comme du NoSQL avec MongoDB, j\'en reviens toujours à la structure si pratique du SQL. <br> J\'aime que les choses soient claires et bien triées. </p>','en'),
(48,'skill_php','<h3>PHP</h3>','<p> En perte de popularité, peut être mais toujours le roi du web. La majorité des sites tournent grâce à lui. Si je peux m\'aventurer parfois sur d\'autres voies avec plaisir, comme celle de NodeJS ou de Python; <br> Lorsque je veux un projet solide, ma maison est celle de PHP. </p>','en'),
(49,'skill_symfony','<h3>Symfony</h3>','<p> Sécurisé, complet, peut être un peu lourd, cela reste quand même bien pratique de pouvoir réaliser pages, routes, formulaires et multiples autres tâches répétitives rapidement pour se concentrer sur le coeur du projet. </p>','en'),
(50,'bonus','<h2>Bonus :</h2>','<p>Revenez plus tard et des secrets apparaîtrons ici.</p>','en'),
-- Japonais
(51,'presentation','<h2>Présentation</h2>','<p><img src=\"../assets/images/photo-min.jpg\" alt=\"Photo de Nolwenn\" class=\"profile-photo\"> Bonjour, je suis Nolwenn WEBER-MARQUISET. <br> Développeur web et web mobile.</p><p>Je développe habituellement en JS et PHP mais pour ce site j\'ai décidé de me lancer le challenge de ne faire que du HTML et du CSS, pour un plus grand détail je vous invite à rejoindre la page <label for=\"f4\" class=\"intern-link\">\"compétences\"</label>. <br> Vous trouverez aussi mon portfolio sous forme de livre de conte à l\'adresse suivante : <br> <a href=\"/book\">Les Contes d\'un Développeur</a> </p><p>Toute les images et logo de ce site sont de ma création, excepté les logos des langages et outils de développement qui ont été récupéré sur <a href=\"https://commons.wikimedia.org/wiki/Main_Page\" target=\"_blank\">Wikimedia Commons</a>.</p>','jp'),
(52,'whoAmI','<h2>Qui suis-je ?</h2>','<p>Nolwenn WEBER-MARQUISET, un développeur aux multiples compétences pour vous servir.</p>','jp'),
(53,'careerPath','<h3>Parcours Professionnel</h3>','<p>Passionné par la création en tout genre. Que ce soit artistique, artisanal, ou la programmation, je me suis naturellement orienté vers cette dernière qui me permet à la fois de laisser libre cours à mon imagination tout en m\'offrant des défis et des énigmes des plus excquises. <br> J\'ai développé mon premier site internet un peu avant 2010, bien qu\'à cette époque je touchais au développement comme un loisir, PHP, Python étaient des jouet à mes yeux. <br> J\'ai décidé de professionnalisé ce loisir que bien plus tard en 2018 et j\'ai obtenu mon premier titre professionnel de développeur web et web mobile en 2019. <br> Bien que j\'ai travaillé pour de multiples entreprises, la seule experience qui mérite d\'être citée ici est la suivante : <br> Depuis 2021 je suis formateur en Développement web et web mobile à l\'<abbr title=\"Agence de Formation et de Conseil en Insertion\">AFCI</abbr>. Ce métier m\'a apporté de nombreuses connaissances et la mise en place de veilles technologiques effices afin de toujours apporter les meilleurs connaissances à mes stagiaires.</p>','jp'),
(54,'otherActivities','<h3>Activités Extra-Professionnelles</h3>','<p>J\'ai été membre de plusieurs groupes et associations et j\'ai participé à l\'organisation de nombreux évènements.</p> <h4>L\'Association \"Japon et Culture\" <a href=\"https://www.japon-culture.com\" target=\"_blank\"> <img src=\"../assets/images/icons/internet.svg\" alt=\"Icone d\'internet\" class=\"external-link-icon\"> </a> </h4> <p> Cette association à pour but de promouvoir la culture japonaise. Si son commité d\'administration est composé de bénévoles français. Les cours de langue et autres qui sont enseignés par cette association sont tenus par des employés d\'origine japonaise. <br> Si j\'y ai commencé comme simple membre, cela fait maintenant plusieurs années que j\'y agis au titre de vice-trésorier. </p> <h4> L\'Association \"Les irrécupérables du jeu de rôle\" <a href=\"https://www.facebook.com/profile.php?id=61556202272484&locale=fr_FR\" target=\"_blank\"> <img src=\"../assets/images/icons/internet.svg\" alt=\"Icone d\'internet\" class=\"external-link-icon\"> </a> </h4> <p> Association de jeu de rôle et de grandeur nature. J\'y ai là aussi commencé en tant que simple membre avant d\'en devenir vice-président pour soutenir le président et aider à organiser les évènements. <br>  Je me suis occupé de la relation avec les marchands qui venaient sur nos évènements (entre 30 et 50 marchands par évènements) ainsi que de leurs placement. <br> J\'ai fini par laisser ma place de vice-président en 2023 à quelqu\'un de plus interessé par cette place, puis en 2024 j\'ai laissé ma place à l\'organisation des évènements afin d\'avoir plus de temps à accorder à la programmation. </p>','jp'),
(55,'inspirations','<h3>Inspirations</h3>','<p> Pour avoir une idée de ce que je peux avoir en tête, voici les personnes célèbres qui m\'inspirent le plus chacun à leur façon : </p> <ul> <li>Terry Pratchett</li> <li>Masahiro Sakurai (桜井 政博)</li> <li>Benoît Theveny</li> </ul>','jp'),
(56,'contactMe','<h2>Me Contacter :</h2>','<p> Ce site se voulant uniquement en HTML et CSS, pas de formulaire de contact. <br> J\'ajouterais d\'autres façons de me contacter par la suite, mais pour l\'instant je vous invite à me contacter sur Linkedin. <br> <a href=\"https://www.linkedin.com/in/nolwenn-weber-marquiset-7a3349162/\" target=\"_blank\"><img src=\"../assets/images/logo/Linkedin_Logo.svg\" alt=\"logo de linkedin\"></a> </p>','jp'),
(57,'projects','<h2>Projets :</h2>','<p>Liste de projets que j\'ai pu réaliser</p>','jp'),
(58,'project_dev_tools','<h3>Outils pour Développeur</h3>','<p>Ce site regroupe des outils utiles au développement front-end.</p>','jp'),
(59,'project_portfolio_book','<h3>Les Contes d\'un Développeur</h3>','<p>Une version de mon portfolio. Celle-ci est sous forme de livre de conte. Réalisé avec Angular.</p>','jp'),
(60,'project_portfolio_dice','<h3>Les dés d\'un Développeur</h3>','<p>Une version de mon portfolio. Celle ci est sous forme de dés à lancer. Réalisé sans Javascript.</p>','jp'),
(61,'project_effet_lune','<h3>L\'Effet Lune</h3>','<p> Site fait sous wordpress avec WooCommerce. Le thème est fait depuis zero sans outils nocode. <br> Seul le thème est disponible sur github. </p>','jp'),
(62,'project_aeiou_stream','<h3>Aeiou Stream</h3>','<p>Site regroupant plusieurs lecteur video pour du streaming. <br> Les lecteurs sont ceux du github de <a href=\"https://github.com/AirenSoft/OvenPlayer\" target=\"_blank\">OvenPlayer</a>. <br> Seul l\'interface multistream est de mon oeuvre. <br> Le projet étant fait pour être utilisé entre amis, le site ne sera pas révélé. </p>','jp'),
(63,'project_piwigo_galery','<h3>Galerie Photo</h3>','<p> Galerie photo de mes voyages. <br> Car il faut savoir parfois ne pas réinventer la roue, ce site est fait avec le CMS Piwigo. </p>','jp'),
(64,'skills','<h2>Mes Compétences :</h2>','<p>Voici certaines de mes compétences</p>','jp'),
(65,'skill_html','<h3>HTML</h3>','<p> HTML, la base de tout site, j\'ai appris à m\'en servir il y a plus de 15 ans et je continue toujours d\'apprendre. <br>  Cliquez sur une des icones pour plus d\'information. </p>','jp'),
(66,'skill_css','<h3>CSS</h3>','<p> Je possède de bien meilleurs qualités que le design. Cela dit, donnez moi n\'importe quelle maquette et je vous la reproduirais sans problème. </p>','jp'),
(67,'skill_sass','<h3>SASS</h3>','<p> Il apporte des outils si pratique que plus d\'un furent et continue d\'être intégré à CSS. <br> Vive le nesting. </p>','jp'),
(68,'skill_js','<h3>Javascript</h3>','<p> Pour beaucoup de développeur, une des premières rencontres avec les algorithmes (la mienne fut en Python). <br> Indispensable pour bien des sites, que ce soit en procedural ou en POO, je vous coderais ce que vous souhaitez. </p>','jp'),
(69,'skill_jquery','<h3>JQuery</h3>','<p> Ce vieil ami à mes débuts en Javascript n\'est plus aussi populaire qu\'il le fut. Bien que j\'ai aussi choisi de ne plus l\'utiliser, il est pratique de le connaître car on le croise encore souvent en exemple ou sur d\'ancien sites ayant besoin d\'une mise à jour. </p>','jp'),
(70,'skill_typescript','<h3>Typescript</h3>','<p> Quand javascript devient trop brouillon pour un gros projet, l\'ami Typescript vient à la rescousse, apportant ce qu\'il manque à javascript pour devenir un langage serieux. </p>','jp'),
(71,'skill_angular','<h3>Angular</h3>','<p> De tous les frameworks et libraries que j\'ai pu testé pour la création de SPA, Angular est celle qui me convient le mieux. <br> Sûrement grâce à son code orienté objet et les atouts de Typescript. </p>','jp'),
(72,'skill_mysql','<h3>MySQL</h3>','<p> En vrai, MariaDB. Quoi qu\'il en soit si il a pu m\'arriver d\'utiliser d\'autres bases de données comme du NoSQL avec MongoDB, j\'en reviens toujours à la structure si pratique du SQL. <br> J\'aime que les choses soient claires et bien triées. </p>','jp'),
(73,'skill_php','<h3>PHP</h3>','<p> En perte de popularité, peut être mais toujours le roi du web. La majorité des sites tournent grâce à lui. Si je peux m\'aventurer parfois sur d\'autres voies avec plaisir, comme celle de NodeJS ou de Python; <br> Lorsque je veux un projet solide, ma maison est celle de PHP. </p>','jp'),
(74,'skill_symfony','<h3>Symfony</h3>','<p> Sécurisé, complet, peut être un peu lourd, cela reste quand même bien pratique de pouvoir réaliser pages, routes, formulaires et multiples autres tâches répétitives rapidement pour se concentrer sur le coeur du projet. </p>','jp'),
(75,'bonus','<h2>Bonus :</h2>','<p>Revenez plus tard et des secrets apparaîtrons ici.</p>','jp');
/*!40000 ALTER TABLE `page_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_menu`
-- Table pour le changement de langue de la navigation
--

DROP TABLE IF EXISTS `page_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `page_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `language` char(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`,`language`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_menu`
-- Nom des pages 
--

LOCK TABLES `page_menu` WRITE;
/*!40000 ALTER TABLE `page_menu` DISABLE KEYS */;
INSERT INTO `page_menu` VALUES
(1,'menu_home','Accueil','fr'),
(2,'menu_project','Projet','fr'),
(3,'menu_about','À propos','fr'),
(4,'menu_skills','Compétences','fr'),
(5,'menu_contact','Contact','fr'),
(6,'menu_bonus','Bonus','fr'),
-- Anglais
(7,'menu_home','Accueil','en'),
(8,'menu_project','Projet','en'),
(9,'menu_about','À propos','en'),
(10,'menu_skills','Compétences','en'),
(11,'menu_contact','Contact','en'),
(12,'menu_bonus','Bonus','en'),
-- Japonais
(13,'menu_home','Accueil','jp'),
(14,'menu_project','Projet','jp'),
(15,'menu_about','À propos','jp'),
(16,'menu_skills','Compétences','jp'),
(17,'menu_contact','Contact','jp'),
(18,'menu_bonus','Bonus','jp');
/*!40000 ALTER TABLE `page_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
-- Table pour la liste des projets
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `github` varchar(255),
  `link` varchar(255),
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
-- 
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES
(1, 'project_portfolio_book', 'devbook.png', 'https://github.com/NolwennWM/Book-of-Developper', 'https://dev.marquiset.fr/book'),
(2, 'project_portfolio_dice', 'devdice.png', '', 'https://www.marquiset.fr/fr/'),
(3, 'project_dev_tools', 'devtools.png', 'https://github.com/NolwennWM/webtool', 'https://dev.marquiset.fr/'),
(4, 'project_piwigo_galery', 'galerie.png', '', 'https://photo.marquiset.fr/'),
(5, 'project_effet_lune', 'leffet_lune.png', 'https://github.com/NolwennWM/L-effet-Lune', 'https://leffetlune.com/'),
(6, 'project_aeiou_stream', 'multistream.png', 'https://github.com/NolwennWM/aeiou-stream-web', '');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects_skills`
--

DROP TABLE IF EXISTS `projects_skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects_skills` (
  `id_project` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL,
  UNIQUE KEY `id_project` (`id_project`,`id_skill`),
  KEY `to_skill` (`id_skill`),
  CONSTRAINT `to_project` FOREIGN KEY (`id_project`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  CONSTRAINT `to_skill` FOREIGN KEY (`id_skill`) REFERENCES `skills` (`id`) ON DELETE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects_skills`
--

LOCK TABLES `projects_skills` WRITE;
/*!40000 ALTER TABLE `projects_skills` DISABLE KEYS */;
INSERT INTO `projects_skills` VALUES
(1, 1),
(1, 3),
(1, 6),
(1, 7),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(3, 4),
(4, 13),
(5, 1),
(5, 3),
(5, 6),
(5, 9),
(5, 11),
(6, 1),
(6, 2),
(6, 4);
/*!40000 ALTER TABLE `projects_skills` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `display` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skills`
--

LOCK TABLES `skills` WRITE;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` VALUES
(1, 'HTML', 'skill_html', 'HTML5_Logo.svg', 1),
(2, 'CSS', 'skill_css', 'CSS3_Logo.svg', 1),
(3, 'SASS', 'skill_sass', 'Sass_Logo.svg', 1),
(4, 'Javascript', 'skill_js', 'Javascript_Logo.svg', 1),
(5, 'JQuery', 'skill_jquery', 'JQuery_Logo.svg', 1),
(6, 'Typescript', 'skill_ts', 'Typescript_Logo.svg', 1),
(7, 'Angular', 'skill_angular', 'Angular_Logo.svg', 1),
(8, 'MySQL', 'skill_mysql', 'MySQL_Logo.svg', 1),
(9, 'PHP', 'skill_php', 'PHP_Logo.svg', 1),
(10, 'Symfony', 'skill_symfony', 'Symfony_Logo.svg', 1),
(11, 'Wordpress', 'skill_wordpress', 'Wordpress_Logo.svg', 0),
(12, 'Github', 'skill_github', 'Github_Logo.svg', 0),
(13, 'Piwigo', 'skill_piwigo', 'Piwigo_Logo.svg', 0);
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2025-03-11 21:21:59

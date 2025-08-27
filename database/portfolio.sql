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
(1,'presentation','<h2>Présentation</h2>','<p><img src=\"/assets/images/photo-min.jpg\" alt=\"Photo de Nolwenn\" class=\"profile-photo\"> Bonjour, je suis Nolwenn WEBER-MARQUISET. <br> Développeur web et web mobile.</p><p>Je développe habituellement en JS et PHP mais pour ce site j\'ai décidé de me lancer le challenge de ne faire que du HTML et du CSS, pour un plus grand détail je vous invite à rejoindre la page <label for=\"f4\" class=\"intern-link\">\"compétences\"</label>. <br> Vous trouverez aussi mon portfolio sous forme de livre de conte à l\'adresse suivante : <br> <a href=\"/book\">Les Contes d\'un Développeur</a> </p><p>Toute les images et logo de ce site sont de ma création, excepté les logos des langages et outils de développement qui ont été récupéré sur <a href=\"https://commons.wikimedia.org/wiki/Main_Page\" target=\"_blank\">Wikimedia Commons</a>.</p>','fr'),
(2,'whoAmI','<h2>Qui suis-je ?</h2>','<p>Nolwenn WEBER-MARQUISET, un développeur aux multiples compétences pour vous servir.</p>','fr'),
(3,'careerPath','<h3>Parcours Professionnel</h3>','<p>Passionné par la création en tout genre. Que ce soit artistique, artisanal, ou la programmation, je me suis naturellement orienté vers cette dernière qui me permet à la fois de laisser libre cours à mon imagination tout en m\'offrant des défis et des énigmes des plus excquises. <br> J\'ai développé mon premier site internet un peu avant 2010, bien qu\'à cette époque je touchais au développement comme un loisir, PHP, Python étaient des jouet à mes yeux. <br> J\'ai décidé de professionnalisé ce loisir que bien plus tard en 2018 et j\'ai obtenu mon premier titre professionnel de développeur web et web mobile en 2019. <br> Bien que j\'ai travaillé pour de multiples entreprises, la seule experience qui mérite d\'être citée ici est la suivante : <br> Depuis 2021 je suis formateur en Développement web et web mobile à l\'<abbr title=\"Agence de Formation et de Conseil en Insertion\">AFCI</abbr>. Ce métier m\'a apporté de nombreuses connaissances et la mise en place de veilles technologiques effices afin de toujours apporter les meilleurs connaissances à mes stagiaires.</p>','fr'),
(4,'otherActivities','<h3>Activités Extra-Professionnelles</h3>','<p>J\'ai été membre de plusieurs groupes et associations et j\'ai participé à l\'organisation de nombreux évènements.</p> <h4>L\'Association \"Japon et Culture\" <a href=\"https://www.japon-culture.com\" target=\"_blank\"> <img src=\"/assets/images/icons/internet.svg\" alt=\"Icone d\'internet\" class=\"external-link-icon\"> </a> </h4> <p> Cette association à pour but de promouvoir la culture japonaise. Si son commité d\'administration est composé de bénévoles français. Les cours de langue et autres qui sont enseignés par cette association sont tenus par des employés d\'origine japonaise. <br> Si j\'y ai commencé comme simple membre, cela fait maintenant plusieurs années que j\'y agis au titre de vice-trésorier. </p> <h4> L\'Association \"Les irrécupérables du jeu de rôle\" <a href=\"https://www.facebook.com/profile.php?id=61556202272484&locale=fr_FR\" target=\"_blank\"> <img src=\"/assets/images/icons/internet.svg\" alt=\"Icone d\'internet\" class=\"external-link-icon\"> </a> </h4> <p> Association de jeu de rôle et de grandeur nature. J\'y ai là aussi commencé en tant que simple membre avant d\'en devenir vice-président pour soutenir le président et aider à organiser les évènements. <br>  Je me suis occupé de la relation avec les marchands qui venaient sur nos évènements (entre 30 et 50 marchands par évènements) ainsi que de leurs placement. <br> J\'ai fini par laisser ma place de vice-président en 2023 à quelqu\'un de plus interessé par cette place, puis en 2024 j\'ai laissé ma place à l\'organisation des évènements afin d\'avoir plus de temps à accorder à la programmation. </p>','fr'),
(5,'inspirations','<h3>Inspirations</h3>','<p> Pour avoir une idée de ce que je peux avoir en tête, voici les personnes célèbres qui m\'inspirent le plus chacun à leur façon : </p> <ul> <li>Terry Pratchett</li> <li>Masahiro Sakurai (桜井 政博)</li> <li>Benoît Theveny</li> </ul>','fr'),
(6,'contactMe','<h2>Me Contacter :</h2>','<p> Ce site se voulant uniquement en HTML et CSS, pas de formulaire de contact. <br> J\'ajouterais d\'autres façons de me contacter par la suite, mais pour l\'instant je vous invite à me contacter sur Linkedin. <br> <a href=\"https://www.linkedin.com/in/nolwenn-weber-marquiset-7a3349162/\" target=\"_blank\"><img src=\"/assets/images/logo/Linkedin_Logo.svg\" alt=\"logo de linkedin\"></a> </p>','fr'),
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
(20,'skill_ts','<h3>Typescript</h3>','<p> Quand javascript devient trop brouillon pour un gros projet, l\'ami Typescript vient à la rescousse, apportant ce qu\'il manque à javascript pour devenir un langage serieux. </p>','fr'),
(21,'skill_angular','<h3>Angular</h3>','<p> De tous les frameworks et libraries que j\'ai pu testé pour la création de SPA, Angular est celle qui me convient le mieux. <br> Sûrement grâce à son code orienté objet et les atouts de Typescript. </p>','fr'),
(22,'skill_mysql','<h3>MySQL</h3>','<p> En vrai, MariaDB. Quoi qu\'il en soit si il a pu m\'arriver d\'utiliser d\'autres bases de données comme du NoSQL avec MongoDB, j\'en reviens toujours à la structure si pratique du SQL. <br> J\'aime que les choses soient claires et bien triées. </p>','fr'),
(23,'skill_php','<h3>PHP</h3>','<p> En perte de popularité, peut être mais toujours le roi du web. La majorité des sites tournent grâce à lui. Si je peux m\'aventurer parfois sur d\'autres voies avec plaisir, comme celle de NodeJS ou de Python; <br> Lorsque je veux un projet solide, ma maison est celle de PHP. </p>','fr'),
(24,'skill_symfony','<h3>Symfony</h3>','<p> Sécurisé, complet, peut être un peu lourd, cela reste quand même bien pratique de pouvoir réaliser pages, routes, formulaires et multiples autres tâches répétitives rapidement pour se concentrer sur le coeur du projet. </p>','fr'),
(25,'bonus','<h2>Bonus :</h2>','<p>Revenez plus tard et des secrets apparaîtrons ici.</p>','fr'),
-- Anglais
(26,'presentation','<h2>Presentation</h2>','<p><img src=\"/assets/images/photo-min.jpg\" alt=\"Photo of Nolwenn\" class=\"profile-photo\"> Hello, I am Nolwenn WEBER-MARQUISET. <br> Web developer.</p><p>I usually develop in JS and PHP but for this site I decided to take on the challenge of using only HTML and CSS. For more details please visit the <label for=\"f4\" class=\"intern-link\">\"skills\"</label> page. <br> You will also find my portfolio presented as a storybook at: <br> <a href=\"/book\">The Tales of a Developer</a> </p><p>All images and logos on this site are my own creations, except for the logos of programming languages and development tools which were taken from <a href=\"https://commons.wikimedia.org/wiki/Main_Page\" target=\"_blank\">Wikimedia Commons</a>.</p>','en'),
(27,'whoAmI','<h2>Who am I?</h2>','<p>Nolwenn WEBER-MARQUISET, a developer with a wide range of skills at your service.</p>','en'),
(28,'careerPath','<h3>Professional Background</h3>','<p>Passionate about all kinds of creation—artistic, craft, or programming—I naturally turned to programming because it allows me to both unleash my imagination and face stimulating challenges. <br> I developed my first website a little before 2010; at that time development was a hobby and PHP and Python were toys to me. <br> I decided to professionalize this hobby much later in 2018 and obtained my first professional qualification as a web and mobile web developer in 2019. <br> Although I have worked for several companies, the experience worth mentioning here is the following: <br> Since 2021 I have been a trainer in Web and Mobile Web Development at the <abbr title=\"Training and Integration Consulting Agency\">AFCI</abbr>. This role has given me extensive knowledge and led me to set up effective technological watch processes to always provide the best knowledge to my trainees.</p>','en'),
(29,'otherActivities','<h3>Extracurricular Activities</h3>','<p>I have been a member of several groups and associations and I have participated in organizing many events.</p> <h4>The \"Japan and Culture\" Association <a href=\"https://www.japon-culture.com\" target=\"_blank\"> <img src=\"/assets/images/icons/internet.svg\" alt=\"Internet icon\" class=\"external-link-icon\"> </a> </h4> <p>This association aims to promote Japanese culture. Although its board is composed of French volunteers, the language classes and other activities are taught by staff of Japanese origin. <br> I started as a simple member and for several years I have been serving as vice-treasurer.</p> <h4>The \"Les irrécupérables du jeu de rôle\" Association <a href=\"https://www.facebook.com/profile.php?id=61556202272484&locale=fr_FR\" target=\"_blank\"> <img src=\"/assets/images/icons/internet.svg\" alt=\"Internet icon\" class=\"external-link-icon\"> </a> </h4> <p>A role-playing and live-action association. I also started there as a simple member before becoming vice-president to support the president and help organize events. <br> I handled relations with the vendors who attended our events (between 30 and 50 vendors per event) as well as their placement. <br> I stepped down as vice-president in 2023 in favor of someone more interested in the position, and in 2024 I left event organization to devote more time to programming.</p>','en'),
(30,'inspirations','<h3>Inspirations</h3>','<p>To give you an idea of who inspires me most, here are some notable people who influence me in different ways:</p> <ul> <li>Terry Pratchett</li> <li>Masahiro Sakurai (桜井 政博)</li> <li>Benoît Theveny</li> </ul>','en'),
(31,'contactMe','<h2>Contact Me:</h2>','<p>This site is intentionally built using only HTML and CSS, so there is no contact form. <br> I will add other ways to contact me later, but for now I invite you to contact me on LinkedIn. <br> <a href=\"https://www.linkedin.com/in/nolwenn-weber-marquiset-7a3349162/\" target=\"_blank\"><img src=\"/assets/images/logo/Linkedin_Logo.svg\" alt=\"LinkedIn logo\"></a> </p>','en'),
(32,'projects','<h2>Projects:</h2>','<p>List of projects I have completed</p>','en'),
(33,'project_dev_tools','<h3>Developer Tools</h3>','<p>This site gathers useful tools for front-end development.</p>','en'),
(34,'project_portfolio_book','<h3>The Tales of a Developer</h3>','<p>A version of my portfolio presented as a storybook. Built with Angular.</p>','en'),
(35,'project_portfolio_dice','<h3>The Dice of a Developer</h3>','<p>A version of my portfolio presented as dice to roll. Built without JavaScript.</p>','en'),
(36,'project_effet_lune','<h3>The Moon Effect</h3>','<p>Site made with WordPress and WooCommerce. The theme was built from scratch without no-code tools. <br> Only the theme is available on GitHub.</p>','en'),
(37,'project_aeiou_stream','<h3>Aeiou Stream</h3>','<p>Site combining several video players for streaming. <br> The players are taken from the OvenPlayer GitHub project. <br> Only the multistream interface is my work. <br> As the project was made to be used among friends, the site will not be publicly released.</p>','en'),
(38,'project_piwigo_galery','<h3>Photo Gallery</h3>','<p>Photo gallery of my travels. <br> Sometimes there is no need to reinvent the wheel; this site uses the Piwigo CMS.</p>','en'),
(39,'skills','<h2>My Skills:</h2>','<p>Here are some of my skills</p>','en'),
(40,'skill_html','<h3>HTML</h3>','<p>HTML, the foundation of every website. I learned to use it more than 15 years ago and I continue to improve. <br> Click on one of the icons for more information.</p>','en'),
(41,'skill_css','<h3>CSS</h3>','<p>I have strengths beyond design; however, give me any mockup and I will reproduce it accurately.</p>','en'),
(42,'skill_sass','<h3>SASS</h3>','<p>It provides very practical tools that have been widely integrated into CSS. <br> Long live nesting.</p>','en'),
(43,'skill_js','<h3>Javascript</h3>','<p>For many developers, this is one of the first encounters with algorithms (mine was with Python). <br> Indispensable for many sites, whether procedural or OOP; I will code what you need.</p>','en'),
(44,'skill_jquery','<h3>JQuery</h3>','<p>This old friend from my early JavaScript days is no longer as popular as it once was. Although I no longer use it regularly, it is useful to know because you still encounter it in examples or older sites that need updates.</p>','en'),
(45,'skill_ts','<h3>Typescript</h3>','<p>When JavaScript becomes too messy for a large project, TypeScript comes to the rescue by providing the features JavaScript lacks to become a more robust language.</p>','en'),
(46,'skill_angular','<h3>Angular</h3>','<p>Of all the frameworks and libraries I have tested for building SPAs, Angular suits me best. <br> Probably thanks to its object-oriented style and the advantages of TypeScript.</p>','en'),
(47,'skill_mysql','<h3>MySQL</h3>','<p>Actually MariaDB. Although I have sometimes used NoSQL databases like MongoDB, I always come back to the practical structure of SQL. <br> I like things to be clear and well organized.</p>','en'),
(48,'skill_php','<h3>PHP</h3>','<p>Maybe losing popularity, but still a major web technology. Most websites run on it. While I sometimes explore NodeJS or Python, when I want a solid project, PHP is my choice.</p>','en'),
(49,'skill_symfony','<h3>Symfony</h3>','<p>Secure and feature-rich; perhaps a bit heavy, but very practical for quickly building pages, routes, forms and many repetitive tasks so you can focus on the core of the project.</p>','en'),
(50,'bonus','<h2>Bonus :</h2>','<p>Come back later and secrets will appear here.</p>','en'),
-- Japonais
(51, 'presentation', '<h2>自己紹介</h2>', '<p><img src=\"/assets/images/photo-min.jpg\" alt=\"Photo of Nolwenn\" class=\"profile-photo\">こんにちは、私はノルウェンです。Web・モバイルWeb開発者兼トレーナーです。このポートフォリオは、私の仕事、情熱、そして歩んできた道を共有するために作成しました。</p>', 'jp'),
(52, 'whoAmI', '<h2>私は誰？</h2>', '<p>私はWeb開発や新しい技術に情熱を持っています。常に学び続ける好奇心旺盛な性格で、10年以上開発を続けています。モダンで拡張性のあるソリューションを作り、知識を他者と共有することが好きです。</p>', 'jp'),
(53, 'careerPath', '<h3>経歴</h3>', '<p>独学でプログラミングを始め、その後専門資格を取得しました。それ以来、開発者やトレーナーとして働き、多くの学習者をさまざまなプロジェクトで指導してきました。</p>', 'jp'),
(54, 'otherActivities', '<h3>その他の活動</h3>', '<p>仕事以外では、音楽やビデオゲーム、新しい技術の探求を楽しんでいます。また、時間があるときにはオープンソースプロジェクトに貢献するのも好きです。</p>', 'jp'),
(55, 'inspirations', '<h3>インスピレーション</h3>', '<p>私は開発者コミュニティ、革新的なプロジェクト、そして新しい技術トレンドからインスピレーションを得ています。共有と協力は、私のモチベーションの中心にあります。</p>', 'jp'),
(56, 'contactMe', '<h2>お問い合わせ：</h2>', '<p>お問い合わせフォームやプロフェッショナルなSNSからご連絡ください。あなたのプロジェクトやアイデアについて喜んでお話しします。</p>', 'jp'),
(57, 'projects', '<h2>プロジェクト：</h2>', '<p>ここでは、単独または協力して取り組んだいくつかのプロジェクトをご紹介します。さまざまな技術や課題に対応しています。</p>', 'jp'),
(58, 'project_dev_tools', '<h3>開発者ツール</h3>', '<p>日常的な作業を簡単かつ効率的にするために設計された、開発者向けの便利なツールセットです。</p>', 'jp'),
(59, 'project_portfolio_book', '<h3>開発者の物語</h3>', '<p>物語と開発を組み合わせ、体験やエピソードをインタラクティブに共有するクリエイティブなプロジェクトです。</p>', 'jp'),
(60, 'project_portfolio_dice', '<h3>開発者のサイコロ</h3>', '<p>Web開発とランダム性を組み合わせた楽しいプロジェクトで、カスタマイズ可能なインタラクティブなサイコロを作成します。</p>', 'jp'),
(61, 'project_effet_lune', '<h3>月の効果</h3>', '<p>月とその神秘にインスパイアされた視覚効果を用いた芸術的かつ技術的なプロジェクトです。</p>', 'jp'),
(62, 'project_aeiou_stream', '<h3>Aeiou ストリーム</h3>', '<p>インタラクティブ性、チャット、リアルタイム配信機能を実験するために設計されたライブ配信プラットフォームです。</p>', 'jp'),
(63, 'project_piwigo_galery', '<h3>フォトギャラリー</h3>', '<p>Piwigoを利用したギャラリーで、モダンでアクセスしやすいデザインを通して写真を引き立てます。</p>', 'jp'),
(64, 'skills', '<h2>私のスキル：</h2>', '<p>Web開発および教育の両方における、私の主な技術スキルの概要をご紹介します。</p>', 'jp'),
(65,'skill_html','<h3>HTML</h3>','<p>HTML — すべてのウェブサイトの基礎です。15年以上前に学び始め、今も学び続けています。<br>アイコンをクリックすると詳細が表示されます。</p>','jp'),
(66,'skill_css','<h3>CSS</h3>','<p>デザインが専門というわけではありませんが、どんなモックアップでも正確に再現できます。</p>','jp'),
(67,'skill_sass','<h3>SASS</h3>','<p>SASSは実用的なツールを提供し、ネストや変数、ミックスインによりCSSの生産性を向上させます。</p>','jp'),
(68,'skill_js','<h3>Javascript</h3>','<p>多くの開発者にとってアルゴリズムに初めて触れる言語の一つです（私の場合はPythonが最初でした）。手続き型でもOOPでも使われ、さまざまなサイトで不可欠です。</p>','jp'),
(69,'skill_jquery','<h3>JQuery</h3>','<p>かつてはよく使われていたライブラリで、現在は以前ほど流行していませんが、古いサイトや教材でまだ目にするため、知っておくと役立ちます。</p>','jp'),
(70,'skill_ts','<h3>Typescript</h3>','<p>大規模プロジェクトでJavaScriptが複雑になると、TypeScriptは型安全性を提供して保守性を高めてくれます。</p>','jp'),
(71,'skill_angular','<h3>Angular</h3>','<p>SPA開発で試したフレームワークの中で、Angularが最も自分に合っています。オブジェクト指向的な設計とTypeScriptの利点が魅力です。</p>','jp'),
(72,'skill_mysql','<h3>MySQL</h3>','<p>実際にはMariaDBを指します。時にはMongoDBなどのNoSQLを使うこともありますが、実用的で整理されたSQLの構造に戻ることが多いです。</p>','jp'),
(73,'skill_php','<h3>PHP</h3>','<p>人気は変動していますが、依然として多くのウェブサイトの基盤となる技術です。場合によってはNodeJSやPythonも使いますが、堅実なプロジェクトではPHPを選びます。</p>','jp'),
(74,'skill_symfony','<h3>Symfony</h3>','<p>堅牢で機能が豊富なフレームワーク。やや重めな場合もありますが、ルーティングやフォームなどを迅速に構築できるため便利です。</p>','jp'),
(75,'bonus','<h2>ボーナス：</h2>','<p>また後でお越しください。ここに秘密が現れるでしょう。</p>','jp');
-- TODO corriger les traductions automatiques

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
(7,'menu_home','Home','en'),
(8,'menu_project','Projects','en'),
(9,'menu_about','About','en'),
(10,'menu_skills','Skills','en'),
(11,'menu_contact','Contact','en'),
(12,'menu_bonus','Bonus','en'),
-- Japonais
(13,'menu_home','ホーム','jp'),
(14,'menu_project','プロジェクト','jp'),
(15,'menu_about','概要','jp'),
(16,'menu_skills','スキル','jp'),
(17,'menu_contact','連絡先','jp'),
(18,'menu_bonus','ボーナス','jp');

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
  UNIQUE KEY `slug` (`slug`),
  CONSTRAINT `to_content` FOREIGN KEY (`slug`) REFERENCES `projects` (`slug`) ON DELETE CASCADE ON UPDATE CASCADE
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

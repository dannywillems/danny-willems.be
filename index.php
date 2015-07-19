<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio Danny Willems Développeur web logiciel software administrateur système">
    <meta name="author" content="Danny Willems">

    <title>Danny Willems - Développeur et administrateur réseau</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
    <?php
        include("include.php");
    ?>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <nav class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Danny Willems</a>
            </nav>

            <nav class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#distinctions">Distinctions et Prix</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#projects">Projets</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Danny Willems</h1>
                <hr>
                <p>Etudiant de 4ième année (MA1) en sciences mathématiques à
                    l'université de Mons (<a
                        href="http://www.umons.ac.be">UMONS</a>).</p>
                <p>En plus d'avoir suivi une spécialisation en physique lors de
                    mes 3 premières années, j'ai appris divers domaines de
                    l'informatique en <em>auto-didacte</em>. Je me suis ainsi formé en
                    administration système, en développement web, en
                    développement logiciel et à l'électronique grâce Arduino et
                    Raspberry Pi.</p>
                <p>Pour parfaire mes compétences de développeur, j'ai
                    participé, en juillet 2014, à la piscine de <a
                        href="http://42.fr/notre-pedagogie-principe/">42</a>. Je réalise depuis les
                    projets de l'école individuellement et compte l'intégrer
                    dans la promotion 2015-2016.</p>
                <p>Je suis capable d'assimiler assez rapidement de nouvelles
                    technologies, de nouveaux langages, de nouveaux frameworks
                    et je suis toujours à la recherche de nouvelles
                    connaissances. Si je ne dispose d'une des compétences que
                    vous cherchez, informez-en moi, je me documenterai et m'y
                    formerai.</p>
                <a href="#services" class="btn btn-info btn-xl page-scroll">En savoir plus sur moi</a>
            </div>
        </div>
    </header>

    <!-- Services: développement web -->
    <?php
        begin_services();

        new_services_header(    "Développeur Web",
                                "Vous cherchez quelqu'un pour réaliser votre
                                portfolio ? Vous souhaitez montrer vos
                                réalisations à travers une page web ?"
                           );

        begin_services_box();
        new_services_box(   "3",
                            "Front-End + Responsive Design",
                            "front-end",
                            "img/front-end_html5_css3_js_bootstrap.png",
                            "Le design, l'expérience utilisateur et l'ergonomie
                            (le <em>front-end</em>) de votre site est
                            important.",
                            "Après vous avoir écouté, je m'occupe de
                            l'apparence de votre site et vous assure que
                            celui-ci sera compatible sur tout type de
                            devices.",
                            array(  "Maitrise des langages HTML5, CSS3",
                                    "Bootstrap",
                                    "JavaScript + JQuery",
                                    "Connaissances de base en [web]design",
                                    "Responsive-design"),
                            array(  "Autres frameworks HTML/CSS (Materialize)")
                         );
        new_services_box(   "3",
                            "Back-End",
                            "back-end",
                            "img/back-end_php_mysql.png",
                            "Mais ce n'est pas tout. Il est nécesssaire de
                            gérer une base de donnée de vos utilisateurs, de
                            vos articles.",
                            "Je me charge de déployer votre base de données, à
                            petite ou grande échelle, sur un seul ou sur
                            plusieurs serveurs, selon votre choix.",
                            array(  "PHP",
                                    "SQL + MySQL"),
                            array(  "MongoDB")
                        );
        new_services_box(   "3",
                            "Hébergement",
                            "hosting-server",
                            "img/servers_128.png",
                            "Votre site doit être hébergé sur un serveur.",
                            "Après avoir étudié vos besoins, je vous oriente
                            vers l'offre d'hébergement qui vous convient le
                            mieux. Je m'occupe de l'inscription et de
                            l'installation de votre site.",
                            array(  "Amazon Web Services (AWS)",
                                    "OVH",
                                    "DigitalOcean"),
                            array(  "Autres hébergeurs")
                        );
        new_services_box(   "3",
                            "Maintenance",
                            "maintenance",
                            "img/maintenance_512.png",
                            "Après que tout soit installé et accessible à votre
                            public, il est nécessaire que celui-ci soit tenu à
                            jour, et maintenu. Ou votre site a simplement
                            besoin d'une mise à jour ou d'une maintenance ?",
                            "Je vous offre mes compétences en maintenance et en
                            administration système.",
                            array(  "Unix/Linux",
                                "Apache",
                                "Gestion de backup à travers des scripts Shell.",
                                "Automatisation de tâches"),
                            array(  "Nginx")
                        );
        end_services_box();
        end_services();
        ?>

    <hr class="hr-section">

    <!-- Services: développement logiciel/mobile -->
    <?php
        begin_services();
        new_services_header(    "Développeur logiciel et mobile",
                                "Vous avez une idée de logiciel ou
                                d'application pour mobile et vous cherchez un
                                développeur ?");
        begin_services_box();
        new_services_box(   "3",
                            "Android",
                            "dev-mobile",
                            "img/android_128.png",
                            "Les <em>apps</em> sont devenues courantes dans nos
                            vies. Il est devenu incontournable que votre projet
                            soit compatible sur mobile et/ou dispose d'une
                            application mobile.",
                            "Grace à différents événements, j'ai pu travailler
                            sur divers projets d'application mobile Android.",
                            array(  "Bases en développement d'Android"),
                            array(  "Approfondir/découvrir le développement
                                    sous Android, iOS, Windows Phone, Tizen.",
                                    "Développement multi-plateforme")
                        );
        new_services_box(   "3",
                            "Scripting",
                            "scripting",
                            "img/python_128.png",
                            "Vous souhaitez avoir un petit programme réalisant
                            des tâches simples, ne demandant pas beaucoup de
                            ressources et rapidement livrable ?",
                            "Les langages interprétés permettent de réaliser des
                            programmes très rapidement et facilement, avec ou
                            sans interface graphique. Python en est un, et j'en
                            suis fan. Grace à sa grande communauté et à son
                            grand nombre de librairies, votre programme sera
                            livrable en très peu de temps.",
                            array(  "Python + bases en Tk (GUI)",
                                    "Shell Scripting"),
                            array(  "Perl")
                        );
        new_services_box(   "3",
                            "Bas niveau",
                            "low-level",
                            "img/c_128.png",
                            "Vous avez besoin d'une application qui utilise
                            toutes les ressources possibles de vos machines,
                            qui soit légère, rapide ?",
                            "A l'école 42, nous sommes formés à la
                            programmation avec le langage C, qui permet de
                            gérer la mémoire très minutieusement et d'utiliser
                            les ressources de votre machine différemment
                            qu'avec d'autres langages comme Python ou Java",
                            array(  "C",
                                    "Valgrind et GDB (debuggage)",
                                    "Makefile"),
                            array(  "Création de drivers",
                                    "Approfondissement du C")
                        );
        new_services_box(   "3",
                            "Java",
                            "java",
                            "img/java.png",
                            FALSE,
                            "Java est devenu un langage de référence et permet une portabilité facile sur chaque type d'architecture.",
                            array(  "Java",
                                    "Swing (GUI)"),
                            array(  "Approfondissement de Java, de librairies supplémentaires")
                        );

        end_services_box();

        end_services();
    ?>

    <hr class="hr-section">

    <?php
        begin_services();
        new_services_header(    "Administrateur système",
                                "Vous cherchez quelqu'un pour maintenir vos
                                serveurs ou votre parc utilisateur ? Vous avez
                                besoin d'une migration système, d'une mise à
                                jour ?");

        begin_services_box();
        new_services_box(   "4",
                            "Unix/Linux",
                            "unix-linux",
                            "img/Linux_platform.png",
                            "Vous cherchez un système stable, gratuit et libre
                            ? Vos serveurs tournent sous un Linux ou un Unix et
                            vous cherchez un administrateur système ?",
                            "Les serveurs et le parc utilisateur dont je suis
                            responsable tournent sous Debian et anciennement
                            FreeBSD. Ces systèmes sont mes environnements
                            favoris de travail",
                            array(  "Linux ([x]Ubuntu, Debian)",
                                    "FreeBSD"),
                            array(  "Autres distributions Linux/Unix")
                       );
        new_services_box(   "4",
                            "Backup - Maintenance",
                            "backup-migration",
                            "img/terminal_color.png",
                            "Besoin de migrer votre système actuel et donc de
                            réaliser une sauvegarde de tout vos fichiers ?
                            Votre système a besoin d'une mise à jour ?",
                            "Grace à divers scripts, je sauvegarde les données
                            que vous avez besoin, met à jour vos systèmes,
                            installe et configure les logicels qui vous sont
                            nécessaires.",
                            array(  "Shell scripting",
                                    "Python"),
                            array(  "Perl")
                        );

        new_services_box(   "4",
                            "Réseau",
                            "network",
                            "img/network.png",
                            "Besoin de mettre en réseau votre parc informatique ?",
                            "Je pourrai vous guider dans le choix matériel adéquat, installer et congifurer votre parc.",
                            array(  "Connaissances de bases en réseau"),
                            array(  "Approfondissement des notions de réseau")
                        );
        end_services_box();

        end_services();
    ?>

    <hr class="section-separation">

    <!-- Prices: hackathon bewan -->
    <section id="distinctions">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
                        Distinctions et prix
                    </h2>
                </div>
            </div>
        </div>

        <hr class="primary">

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article class="text-center">
                        <h1><a href="http://www.be-hackathon.be/?lang=fr">Hackathon bewan</a></h1>
                        <h1><em>Metro</em> - 1er Prix</h1>
                        <p class="text-primary">
                            <em>Metro</em> est une application Android, conçue
                            principalement pour les personnes aveugles ou
                            malvoyantes, qui assiste ces dernières lors de
                            trajet en métro.
                        </p>
                        <p class="text-danger">
                            Il n'est pas toujours facile de s'y retrouver
                            lorsque nous sommes à une station de
                            transport public, en particulier les métros.
                            Plusieurs lignes sont desservies au même
                            endroit, et bien qu'il existe des panneaux pour
                            se diriger, les personnes ayant des problèmes
                            de vision ont des difficultés à s'orienter.
                        </p>
                        <p class="text-success">
                            Connecté à l'API des transports publics et
                            dialoguant avec un réseau de iBeacons disposés
                            à chaque station, <em>Metro</em> vous dirige et
                            vous prévient, grace à la synthèse vocale, des
                            prochains métros qui arriveront.
                        </p>
                        <p class="text-info">
                            L'organisation ne disposant pas d'iBeacons, j' ai
                            été chargé d'en simuler à partir de <em>Raspberry
                                Pi</em> et d'adaptateur Bluetooth LE.
                        </p>
                    </article>
                </div>
                <div class="col-lg-4">
                    <img class="img-responsive center-block" src="img/hackathon_metro.png" />
                </div>
            </div>
        </div>
    </section>

    <section id="distinctions">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4">
                    <img class="img-responsive center-block" src="img/hackathon_wecare4u.png" />
                </div>
                <div class="col-lg-8">
                    <article>
                        <h1>
                            <a href="http://sgconnectedhack.bemyapp.com/">
                                 Hackathon SG Connected
                            </a>
                        </h1>
                        <h1>
                            <em>WeCare4U</em> - 3ème prix
                        </h1>
                        <p class="text-primary">
                            <em>WeCare4U</em> est une application fonctionnant
                            sur les montres connectées Pebble accompagnée d'une
                            application Android qui détecte les chutes, voire
                            les collisions lors d'accidents, et prévient
                            automatiquement les services d'urgences et vos
                            proches si vous avez besoin d'aide.
                        </p>
                        <p class="text-danger">
                            Que vous soyez cycliste, motard, personne agée ou
                            que vous ayez du mal à vous déplacer, une chute est
                            vite arrivée et celle-ci peut avoir de conséquences
                            assez graves.
                        </p>
                        <p class="text-success">
                            WeCare4U est là pour vous
                            aider. Dès qu'une chute est détectée, la montre
                            vibre et un message s'affiche. Si après un certain
                            delai, vous n'avez pas répondu au message en ayant
                            appuyé sur un bouton, les urgences et vos proches
                            sont prévenus. Votre position, votre numéro de
                            téléphone et tout autre information que vous
                            aurez accepté de partager seront transmis pour un
                            meilleur secours.
                        </p>
                        <p class="text-info">
                            J'ai été amené à apprendre, lors de ce
                            hackathon, le développement d'applications sur
                            Android et Pebble.
                        </p>
                    </article>
                </div>
            </div>

        </div>
    </section>

    <hr class="section-separation">

    <!--
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    -->

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contact</h2>
                    <hr class="primary">
                    <p>Vous souhaitez me contacter ?</p>
                </div>
                <div class="col-lg-offset-4 col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:contact@danny-willems.be">contact@danny-willems.be</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>

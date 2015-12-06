<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portfolio Danny Willems belgique belgium danny-willems.be Développeur web logiciel software administrateur système">
    <meta name="author" content="Danny Willems">

    <title>Danny Willems - Développeur Web, logiciel et administrateur réseau</title>

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
    <link rel="stylesheet" href="css/dw.css" type="text/css">

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
                        <a class="page-scroll" href="#distinctions">Distinctions</a>
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
                <p>
                    Front-end web developer - Software developer - Mobile developer - AdminSys
                </p>
                <p>
                    <img class="dw-img-profile dw-img-rounded" src="img/personal.jpg" />
                </p>
                <a href="#services" class="btn btn-info btn-xl page-scroll">En savoir plus sur moi</a>
                <div>
                    <a class="icon-website btn" href="http://be.linkedin.com/in/dannywillems42">
                        <img src="img/linkedin.png" />
                    </a>
                    <a class="icon-website btn" href="http://github.com/dannywillems">
                        <img src="img/github.png" />
                    </a>
                </div>
            </div>
        </div>
    </header>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <h3 class="text-center">
                        Web developer
                    </h3>
                    <hr>
                    <p class="text-center">
                        Do you need a website for your shop or to show your
                        creations ? Do you need a blog or a website for your
                        next event ?
                    </p>
                    <p class="text-center">
                        Front-end developer, I will develop your website and
                        maintain it. I can develop from scratch, by using a
                        CMS such as WordPress or Prestashop or by using
                        frameworks such as Bootstrap, JQuery UI,
                        MaterializeCSS, ...
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <h3 class="text-center">
                        Software developer
                    </h3>
                    <hr>
                    <p class="text-center">
                        Do you need a desktop application ?
                    </p>
                    <p class="text-center">
                        Whether in C, Java, Python or OCaml, I will help
                        you to develop your application.
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <h3 class="text-center">
                        Hybrid mobile developer
                    </h3>
                    <hr>
                    <p>
                        Mobile applications became a real need if you want to grow fastly.
                    </p>
                    <p>
                        I developed some hybrid mobile applications using
                        Cordova and Ionic.
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <h3 class="text-center">
                        Admin Sys
                    </h3>
                    <hr>
                    <p class="text-center">
                        Each enterprise need a server to host their internal
                        files or their projects in development.
                    </p>
                    <p class="text-center">
                        I can manage your server running on a Unix or Linux
                        distribution, install and maintain your hosting
                        solutions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr class="section-separation">

    <section id="distinctions">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-image">
                            <img class="" src="img/behackathon.png">
                        </div>
                        <div class="card-header">
                            <p class="card-title">Be-Hackathon</p>
                            <p class="card-subtitle">1st Price</p>
                        </div>
                        <hr></hr>
                        <div class="card-content">
                            <p>
                                 Metro est une application Android, conçue
                                 principalement pour les personnes aveugles ou
                                 malvoyantes, qui assiste ces dernières lors de
                                 trajet en métro.
                            </p>
                        </div>
                        <hr></hr>
                        <div class="card-footer">
                            <p>
                                 <a href="#">More details</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-image">
                            <img class="" src="img/kissyourteacher.png">
                        </div>
                        <div class="card-header">
                            <p class="card-title">Kiss Your Teacher</p>
                            <p class="card-subtitle">3rd Price</p>
                        </div>
                        <hr></hr>
                        <div class="card-content">
                            <p>
                                 Metro est une application Android, conçue
                                 principalement pour les personnes aveugles ou
                                 malvoyantes, qui assiste ces dernières lors de
                                 trajet en métro.
                            </p>
                        </div>
                        <hr></hr>
                        <div class="card-footer">
                            <p>
                                 <a href="#">More details</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-image">
                            <img class="" src="img/sgconnectedhack.png">
                        </div>
                        <div class="card-header">
                            <p class="card-title">SG Connected Hack</p>
                            <p class="card-subtitle">3rd Price</p>
                        </div>
                        <hr></hr>
                        <div class="card-content">
                            <p>
                                 Metro est une application Android, conçue
                                 principalement pour les personnes aveugles ou
                                 malvoyantes, qui assiste ces dernières lors de
                                 trajet en métro.
                            </p>
                        </div>
                        <hr></hr>
                        <div class="card-footer">
                            <p>
                                 <a href="#">More details</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <div class="row">
        <footer class="col-lg-12 text-center">
            WeCare4U logo was designed by <em><a href="http://www.charlottebretonsch.com/">Charlotte Breton Schreiner</a></em>. All others logos come from <a href="http://iconfinder.com">IconFinder</a>
        </footer>
    </div>
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

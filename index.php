<!DOCTYPE html>
<?php
  $list_lang = array();
  $list_lang['fr'] = "Français";
  $list_lang['en'] = "English";

  session_start();

  if (isSet($_GET['lang']))
  {
    $save_lang = $_GET['lang'];
    $_SESSION['save_lang'] = $save_lang;
    setcookie('save_lang', $save_lang, time() + (3600 * 24 * 30));
  }
  else if (isSet($_COOKIE['save_lang']))
    $save_lang = $_COOKIE['save_lang'];
  else
    $save_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  switch ($save_lang)
  {
    case "fr":
      echo "<html lang='fr'>";
      include_once 'lang_fr.php';
      break;
    default:
      echo "<html lang='en'>";
      include_once 'lang_en.php';
      break;
  }

  function new_card($img_alt, $img_src, $card_title, $card_subtitle, $card_content, $card_blog_link, $css_supp)
  {
    echo "
    <div class='col-xs-12 col-md-6 col-lg-4 " . $css_supp . "'>
        <div class='card'>
            <div class='card-image'>
                <img class='' alt='" . $img_alt . "' src='" . $img_src . "'>
            </div>
            <div class='card-header'>
                <p class='card-title'>" . $card_title . "</p>
                <p class='card-subtitle'>" . $card_subtitle . "</p>
            </div>
            <hr></hr>
            <div class='card-content'>
              <p>" . $card_content . "</p>
            </div>
            <hr></hr>
            <div class='card-footer'>
                <p>
                  <a href='" . $card_blog_link . "'>" . $GLOBALS['lang']['CARD_MORE_DETAILS'] . "</a>
                </p>
            </div>
        </div>
    </div>";
  }
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"      content="IE=edge" />
    <meta name="viewport"                   content="width=device-width, initial-scale=1" />
    <meta name="description"                content="<?php echo $lang['TITLE'] ?>" />
    <meta name="author"                     content="Danny Willems" />
    <meta name="keywords"                   content="Danny Willems developer web mobile hybrid software hackathon développeur" />

    <meta property="og:url"                 content="http://danny-willems.be" />
    <meta property="og:type"                content="website" />
    <meta property="og:title"               content="<?php echo $lang['TITLE_SHORT'] ?>" />
    <meta property="og:description"         content="<?php echo $lang['DESCRIPTION'] ?>" />
    <meta property="og:image"               content="http://danny-willems.be/img/personal.jpg" />

    <title><?php echo $lang['TITLE'] ?></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
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
                      <a class="page-scroll" href="#services"><?php echo $lang['SECTION_SERVICES'] ?></a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#distinctions"><?php echo $lang['SECTION_DIST_HACK'] ?></a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#projects"><?php echo $lang['SECTION_PROJECTS'] ?></a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#education"><?php echo $lang['SECTION_EDUCATION'] ?></a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#skills"><?php echo $lang['SECTION_SKILLS'] ?></a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#contact"><?php echo $lang['SECTION_CONTACT'] ?></a>
                    </li>
                    <li>
                      <a class="page-scroll" href="https://blog.danny-willems.be"><?php echo $lang['SECTION_BLOG'] ?></a>
                    </li>
                    <li>
                      <div class="dw-multi-language">
                        <button class="page-scroll btn btn-menu dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <?php echo $list_lang[$save_lang] ?> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <?php
                            foreach ($list_lang as $key => $value)
                            {
                              if ($key != $save_lang)
                                echo "<li><a href='https://danny-willems.be/?lang=" . $key . "'>" . $value . "</a></li>";
                            }
                          ?>
                        </ul>
                      </div>
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
                  <?php echo $lang['SERVICES_TITLE']?>
                </p>
                <p>
                    <img class="dw-img-profile dw-img-rounded" alt="Danny Willems" src="img/personal.jpg" />
                </p>
                <a href="#services" class="btn btn-more-about-me btn-xl page-scroll"><?php echo $lang['SERVICES_MORE_ABOUT_ME'] ?></a>
                <div>
                    <a class="icon-website btn" href="http://be.linkedin.com/in/dannywillems42">
                        <img src="img/linkedin.png" alt="Danny Willems Linkedin" />
                    </a>
                    <a class="icon-website btn" href="http://github.com/dannywillems">
                        <img src="img/github.png" alt="Danny Willems Github" />
                    </a>
                    <a class="icon-website btn"  href="http://twitter.com/dwillems42">
                        <img src="img/twitter.png" alt="Danny Willems Twitter"/>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <h2 class="text-center" id="services">
      <?php
        echo $lang['SECTION_SERVICES'];
      ?>
    </h2>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <h3 class="text-center">
                      <?php echo $lang['WEB_DEV_TITLE'] ?>
                    </h3>
                    <hr>
                    <p class="text-center">
                      <?php echo $lang['WEB_DEV_FRONT_ISSUE'] ?>
                    </p>
                    <p class="text-center">
                      <?php echo $lang['WEB_DEV_FRONT_SOL'] ?>
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <h3 class="text-center">
                      <?php echo $lang['SOFT_DEV_TITLE'] ?>
                    </h3>
                    <hr>
                    <p class="text-center">
                      <?php echo $lang['SOFT_DEV_ISSUE'] ?>
                    </p>
                    <p class="text-center">
                      <?php echo $lang['SOFT_DEV_SOL'] ?>
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <h3 class="text-center">
                      <?php echo $lang['MOBILE_DEV_TITLE'] ?>
                    </h3>
                    <hr>
                    <p class="text-center">
                      <?php echo $lang['MOBILE_DEV_ISSUE'] ?>
                    </p>
                    <p class="text-center">
                      <?php echo $lang['MOBILE_DEV_SOL'] ?>
                    </p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-12">
                    <h3 class="text-center">
                      <?php echo $lang['SYSADMIN_TITLE'] ?>
                    </h3>
                    <hr>
                    <p class="text-center">
                      <?php echo $lang['SYSADMIN_ISSUE'] ?>
                    </p>
                    <p class="text-center">
                      <?php echo $lang['SYSADMIN_SOL'] ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <hr class="section-separation">

    <h2 id="distinctions" class="text-center">
      <?php echo $lang['DIST_HACK_TITLE'] ?>
    </h2>
    <section>
        <div class="container">
            <div class="row">
              <?php
                new_card("Be Hackathon Metro", "img/behackathon.png", "Be-hackathon", $lang['DIST_HACK_BE_HACKATHON_PLACE'], $lang['DIST_HACK_BE_HACKATHON_DESC'], $lang['DIST_HACK_BE_HACKATHON_BLOG_LINK'], "");
                new_card("Kiss Your Teacher Hackathon ImmuneWar", "img/kissyourteacher.png", "Kiss Your Teacher", $lang['DIST_HACK_KISS_YOUR_TEACHER_PLACE'], $lang['DIST_HACK_KISS_YOUR_TEACHER_DESC'], $lang['DIST_HACK_KISS_YOUR_TEACHER_BLOG_LINK'], "");
                new_card("SGConnectedHack Hackathon WeCare4U", "img/sgconnectedhack.png", "SG Connected Hack", $lang['DIST_HACK_SG_CONNECTED_HACK_PLACE'], $lang['DIST_HACK_SG_CONNECTED_HACK_DESC'], $lang['DIST_HACK_SG_CONNECTED_HACK_BLOG_LINK'], "");
                new_card("App For Students Hackathon", "img/appforstudents.png", "App For Students", $lang['DIST_HACK_APP_FOR_STUDENTS_PLACE'], $lang['DIST_HACK_APP_FOR_STUDENTS_DESC'], $lang['DIST_HACK_APP_FOR_STUDENTS_BLOG_LINK'], "col-lg-offset-2");
                new_card("Softlab Hackathon GPSTracker", "img/softlab.png", "MIC Summer Camp", $lang['DIST_HACK_SOFTLAB_PLACE'], $lang['DIST_HACK_SOFTLAB_DESC'], $lang['DIST_HACK_SOFTLAB_BLOG_LINK'], "");
              ?>
            </div>
        </div>
    </section>

    <hr class="section-separation">

    <h2 id="projects" class="text-center">
      <?php echo $lang['PP_TITLE'] ?>
    </h2>
    <section>
        <div class="container">
            <div class="row">
              <?php
                new_card("Vim-IDE", "img/vim-ide.png", "Vim-IDE", $lang['PP_VIM_IDE_PLACE'], $lang['PP_VIM_IDE_DESC'], $lang['PP_VIM_IDE_BLOG_LINK'], "");
                new_card("GSLib", "img/gslib.png", "GSLib", $lang['PP_GSLIB_PLACE'], $lang['PP_GSLIB_DESC'], $lang['PP_GSLIB_BLOG_LINK'], "");
                new_card("GSMath", "img/gsmath.png", "GSMath", $lang['PP_GSMATH_PLACE'], $lang['PP_GSMATH_DESC'], $lang['PP_GSMATH_BLOG_LINK'], "");
                new_card("Open Courses", "img/open-courses.png", "Open Courses", $lang['PP_OPEN_COURSES_PLACE'], $lang['PP_OPEN_COURSES_DESC'], $lang['PP_OPEN_COURSES_BLOG_LINK'], "col-lg-offset-2");
                new_card("CustomizeCalendars", "img/customizecalendars.png", "CustomizeCalendars", $lang['PP_CUSTOMIZECALENDARS_PLACE'], $lang['PP_CUSTOMIZECALENDARS_DESC'], $lang['PP_CUSTOMIZECALENDARS_BLOG_LINK'], "");
              ?>
            </div>
        </div>
    </section>

    <hr class="section-separation">

    <h2 id="projects" class="text-center">
      <?php echo $lang['EDUCATION_TITLE'] ?>
    </h2>
    <section id="education">
        <div class="container">
            <div class="row">
              <?php
                new_card("UMONS", "img/umons_size.png", "UMONS (2012-2017)", $lang['EDUCATION_UMONS_SECTION'], $lang['EDUCATION_UMONS_DESCRIPTION'], $lang['EDUCATION_UMONS_BLOG_LINK'], "col-lg-offset-2");
                new_card("42", "img/42_size.png", "42 (2015-2018)", $lang['EDUCATION_42_SECTION'], $lang['EDUCATION_42_DESCRIPTION'], $lang['EDUCATION_42_BLOG_LINK'], "");
              ?>
            </div>
        </div>
    </section>

    <hr class="section-separation">

    <h2 id="projects" class="text-center">
      <?php echo $lang['SKILLS_TITLE'] ?>
    </h2>
    <section id="skills">
      <div class="container">
        <div class="row">
          <div class="skills-title col-lg-2 col-md-2 col-xs-4 text-right">
            <p><?php echo $lang['SKILLS_PROGRAMMING'] ?></p>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-8 text-left">
            <p><?php echo $lang['SKILLS_PROGRAMMING_DESC'] ?></p>
          </div>
          <div class="skills-title col-lg-2 col-md-2 col-xs-4 text-right">
            <p><?php echo $lang['SKILLS_OS'] ?></p>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-8 text-left">
            <p><?php echo $lang['SKILLS_OS_DESC'] ?></p>
          </div>
        </div>
        <div class="row">
          <div class="skills-title col-lg-2 col-md-2 col-xs-4 text-right">
            <p><?php echo $lang['SKILLS_WEB'] ?></p>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-8 text-left">
            <p><?php echo $lang['SKILLS_WEB_DESC'] ?></p>
          </div>
          <div class="skills-title col-lg-2 col-md-2 col-xs-4 text-right">
            <p><?php echo $lang['SKILLS_SERVER'] ?></p>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-8 text-left">
            <p><?php echo $lang['SKILLS_SERVER_DESC'] ?></p>
          </div>
        </div>
        <div class="row">
          <div class="skills-title col-lg-2 col-md-2 col-xs-4 text-right">
            <p><?php echo $lang['SKILLS_DB'] ?></p>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-8 text-left">
            <p><?php echo $lang['SKILLS_DB_DESC'] ?></p>
          </div>
          <div class="skills-title col-lg-2 col-md-2 col-xs-4 text-right">
            <p><?php echo $lang['SKILLS_OTHER'] ?></p>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-8 text-left">
            <p><?php echo $lang['SKILLS_OTHER_DESC'] ?></p>
          </div>
        </div>
      </div>
    </section>

    <hr class="section-separation">

    <h2 class="text-center" id="contact">
      <?php echo $lang['CONTACT_TITLE'] ?>
    </h2>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                  <h2 class="section-heading"></h2>
                  <p class="contact-text"><?php echo $lang['CONTACT_SLOGAN'] ?> <?php echo $lang['CONTACT_TEXT'] ?></p>
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

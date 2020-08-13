<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Killian DOUBRE - CV Web - Étudiant Développeur Web</title>
  <meta name="description" content="Découvrez mon profil d'étudiant en apprentissage du métier de développeur web, mes compétences et mes travaux via un CV Web !" />
  <link rel="canonical" href="https://www.killian-doubre.fr" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow, notranslate"/>
  <meta name="theme-color" content="#20271F"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="#20271F">
  <link rel="shortcut icon" href="src/img/favicon.ico" media="none" onload="if(media!='all')media='all'"/>
  <link rel="stylesheet" href="src/css/normalize.css">
  <link rel="stylesheet" href="src/css/style.css">
  <link rel="stylesheet" href="src/css/header.css">
  <link rel="stylesheet" href="src/css/formation.css">
  <link rel="stylesheet" href="src/css/competences.css" media="none" onload="if(media!='all')media='all'">
  <link rel="stylesheet" href="src/css/travaux.css" media="none" onload="if(media!='all')media='all'">
  <link rel="stylesheet" href="src/css/contact.css" media="none" onload="if(media!='all')media='all'">
  <link rel="stylesheet" href="src/css/footer.css" media="none" onload="if(media!='all')media='all'">
  <link rel="stylesheet" href="src/css/aggrandissement.css" media="none" onload="if(media!='all')media='all'">
  <link rel="stylesheet" href="src/css/sticky-number-page.css">
</head>
<body onLoad="verifyCurrentDiv()" onScroll="verifyCurrentDiv()">
  <div id="header-bloc">
    <?php
      include 'src/html/header.php';
      include 'src/html/sticky-number-page.php';
    ?>
  </div>
  <div id="formation-bloc">
    <?php
      include 'src/html/formation.php';
    ?>
  </div>
  <div id="competences-bloc">
    <?php
      include 'src/html/competences.php';
    ?>
  </div>
  <div id="travaux-bloc">
    <?php
      include 'src/html/travaux.php';
    ?>
  </div>
  <div id="contact-bloc">
    <?php
      include 'src/html/contact.php';
    ?>
  </div>
  <div id="footer-bloc">
    <?php
      include 'src/html/footer.php';
    ?>
  </div>
  <script type="text/javascript" language="Javascript" src="src/js/jquery.js"></script>
  <script type="text/javascript" language="Javascript" src="src/js/testVisible.min.js"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130424124-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130424124-1');
  </script>
  <script type="text/javascript" language="Javascript" src="src/js/numberOfPage.min.js" defer></script>
  <script type="text/javascript" language="Javascript" src="src/js/progressBar.min.js" async></script>
  <script type="text/javascript" language="Javascript" src="src/js/modalImg.min.js" async></script>
</body>
</html>

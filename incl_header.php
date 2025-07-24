<?php
    define('year_blezy', date('Y') - 1990);
    define('insta_link', 'https://www.instagram.com/bdagencements/');
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BD Agencements - L'art de la menuiserie et de l'agencement depuis <?= year_blezy ?> ans</title>
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="libs/slick/slick.min.css">
    <link rel="stylesheet" href="libs/magnific/magnific-popup.min.css">
    <link rel="stylesheet" href="css/styles.min.css?v=2.1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-71691675-42', '');
      ga('send', 'pageview');
      
    </script>
</head>

<body>

    <header class="header">

        <div class="header__inner">
            <div class="header__item header__item_small">
                <div class="bloctel bloctel_primary">
                    <i class="bloctel__icon icon-phone"></i>
                    <span class="bloctel__num">01 64 20 81 70</span>
                </div>
            </div>
            <div class="header__item">
                <a href="/" class="header__logo">
                    <img src="img/logo.svg" alt="Menuiserie BD Agencements">
                </a>
            </div>
            <div class="header__item header__item_small is-hidden large-visible">
                <img src="img/map.png" alt="">
            </div>
        </div>

        <nav class="header__nav nav nav_primary">
            <div class="nav__mobile">
                <a href="/" class="nav__link icon-home"></a>
                <a href="javascript:void(0);" class="nav__link icon-menu js-toggle-nav"></a>
            </div>
            <ul class="nav__inner">
                <li class="nav__item is-hidden medium-visible">
                    <a href="/" class="nav__link icon-home"></a>
                </li>
                <li class="nav__item nav__item_has-sub">
                    <a href="qui-sommes-nous.php" class="nav__link <?php if('qsn' == $page): echo 'nav__link_current'; endif; ?>">
                        Qui sommes-nous ?
                    </a>
                     <ul class="nav__sub">
                        <li class="nav__item">
                            <a href="notre-equipe.php" class="nav__link">
                                Notre équipe
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="nos-certifications.php" class="nav__link">
                                Nos certifications
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav__item">
                    <a href="ils-nous-font-confiance.php" class="nav__link <?php if('confiance' == $page): echo 'nav__link_current'; endif; ?>">
                        Ils nous font confiance
                    </a>
                </li>
                <li class="nav__item nav__item_has-sub">
                    <a href="nos-realisations.php" class="nav__link <?php if('realisations' == $page): echo 'nav__link_current'; endif; ?>">
                        Nos réalisations
                    </a>
                    <ul class="nav__sub">
                        <li class="nav__item">
                            <a href="realisations-professionnels.php" class="nav__link">
                                Professionnels
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="realisations-particuliers.php" class="nav__link">
                                Particuliers
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav__item">
                    <a href="contact.php" class="nav__link <?php if('contact' == $page): echo 'nav__link_current'; endif; ?>">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>

    </header>
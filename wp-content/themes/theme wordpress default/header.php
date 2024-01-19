<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo bloginfo('template_directory');?>/assets//images/small-logo.png">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_directory');?>/assets/css/jquery.fancybox.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-EXAMPLE_HASH" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto+Slab:wght@900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="myHeader">
    <div class="header-wrapper">
            <div class="logo">
                <a href="/">
                    <img src="<?php echo bloginfo('template_directory');?>/assets//images/real-logo.png"/>
                </a>
            </div>
            <div class="menu-pages">
                <ul>
                    <li><a href="/naslovna">Naslovna</a></li>
                    <li><a href="/pravila-igre/">Pravila igre</a></li>
                    <li><a href="/rodjendani/">Rodjendani</a></li>
                    <li><a href="/paintball-za-odrasle/">Paintball</a></li>
                    <li><a href="/airsoft/">Airsoft</a></li>
                    <li><a href="/galerija-2/">Galerija</a></li>
                    <li><a href="/kontakt-paintball-sremcica/">Kontakt</a></li>
                </ul>
            </div>
            <div class="menu-phone">
                <a href="tel:0655822552"><i class="fab fa-brands fa-viber"></i></a>
                <a href="https://www.instagram.com/paintballsremcica/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/paintballsremcica/"><i class="fab fa-instagram"></i></a>
            </div>
    </div>

<!--    <div class="mobile-header">-->
<!--        <div class="menu-phone">-->
<!--            <a href="tel:0655822552"><i class="fal fa-phone-alt"></i></a>-->
<!--            <a href="https://www.instagram.com/paintballsremcica/"><i class="fab fa-facebook-f"></i></a>-->
<!--            <a href="https://www.instagram.com/paintballsremcica/"><i class="fab fa-instagram"></i></a>-->
<!--        </div>-->
<!--        <div class="logo">-->
<!--            <a href="/">-->
<!--                <img src="--><?php //echo bloginfo('template_directory');?><!--/assets//images/real-logo.png"/>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->


    <div id="menuToggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>

        <ul id="menu">
            <a href="/naslovna"><li>Naslovna</li></a>
            <a href="/pravila-igre/"><li>Pravila igre</li></a>
            <a href="/rodjendani/"><li>Rodjendani</li></a>
            <a href="/paintball-za-odrasle/"><li>Paintball</li></a>
            <a href="/airsoft/"><li>Airsoft</li></a>
            <a href="/galerija-2/"><li>Galerija</li></a>
            <a href="/kontakt-paintball-sremcica/"><li>Kontakt</li></a>
        </ul>
    </div>
</header>
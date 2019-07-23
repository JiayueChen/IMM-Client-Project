<!DOCTYPE html>
<!-- sets the language: -->
<html <?php language_attributes(); ?>>

<head>
    <!-- sets the character set: -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- sets pingbacks address for blogging: -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- sets url to the main Wordpress style.css file: -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

    <!-- sets site title and page title: -->
    <title><?php wp_title( '|', true,'right' ); ?> <?php bloginfo('name'); ?></title>
    <!-- leaves a placeholder for Wordpress and plugins: -->
    <?php wp_head(); ?>
</head>

<!-- leaves a placeholder for Wordpress body classes: -->

<body <?php body_class(); ?>>

    <!--BANNER/HEADER SECTION-->
    <section class="banner">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <img class="logo" src="<?php bloginfo("template_url"); ?>/assets/images/logos/program-logo.png" alt="Interactive Media Management">

                <div class="carousel-item active">
                    <img class="banner-img d-block w-100" src="<?php bloginfo("template_url"); ?>/assets/images/header/banner-1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="banner-img d-block w-100" src="<?php bloginfo("template_url"); ?>/assets/images/header/banner-2.jpg" alt="Second slide">
                </div>
                <!--<div class="carousel-item">
    <img class="banner-img d-block w-100" src="<?php bloginfo("template_url"); ?>/assets/images/header/banner-3.png" alt="Third slide">
</div>
<div class="carousel-item">
    <img class="banner-img d-block w-100" src="<?php bloginfo("template_url"); ?>/assets/images/header/banner-4.png" alt="Fourth slide">
</div>-->
                <div class="container">
                    <a href="https://collegeapply.ontariocolleges.ca/Login?collegeCode=ALGO&programCode=0300X01F&lang=en" target="_blank">
                        <button class="apply">Apply Now!</button>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <!--Navigation bar-->
    <nav class="navbar navbar-dark navbar-expand-md" id="navbar">

        <!-- Toggler/collapsibLe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- put primary menu location to header bounded with bootstrap 4 -->
        <?php
        require_once('bs4navwalker.php');

        wp_nav_menu([
            'menu'            => 'main',
            'theme_location'  => 'primary-menu',
            'container'       => 'div',
            'container_id'    => 'collapsibleNavbar',
            'container_class' => 'collapse navbar-collapse justify-content-center',
            'menu_id'         => false,
            'menu_class'      => 'nav navbar-nav',
            'depth'           => 0,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
        ]);
        ?>

    </nav>

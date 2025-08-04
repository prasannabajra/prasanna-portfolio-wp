<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>I'm Prasanna Bajra Bajracharya</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/bg/favicon.png">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- START PRELOADER AREA-->
    <div id="preloader-area">
        <div class="loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- END PRELOADER AREA -->

    <!-- START HOMEPAGE DESIGN AREA -->
    <header id="home" class="welcome-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-2">
                        <!-- START LOGO DESIGN AREA -->
                        <div class="logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                        </div>
                        <!-- END LOGO DESIGN AREA -->
                    </div>
                    <div class="col-md-9 col-sm-10">
                        <!-- START MENU DESIGN AREA -->
                        <div class="mainmenu">
                            <div class="navbar navbar-nobg">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <?php
                                    wp_nav_menu( array(
                                        'theme_location' => 'primary',
                                        'container'      => false,
                                        'menu_class'     => 'nav navbar-nav navbar-right',
                                        'fallback_cb'    => false,
                                    ) );
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- END MENU DESIGN AREA -->
                    </div>
                </div>
            </div>
        </div>
        <div class="welcome-image-area" data-stellar-background-ratio="0.6" style="background: url(<?php echo esc_url( get_theme_mod( 'hero_image', get_template_directory_uri() . '/assets/images/bg/bg.jpg' ) ); ?>); background-size: cover;">
            <div id="particles-js"></div>
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header-text text-center"> 
                                    <?php
                                    $header_main_title = get_theme_mod( 'header_main_title' );
                                    if ( empty( $header_main_title ) ) {
                                        $header_main_title = "I'm prasanna bajra bajracharya";
                                    }
                                    ?>
                                    <h2><?php echo esc_html( $header_main_title ); ?></h2>
                                    <strong class="text-rotator font2 white"><span><?php echo esc_html( get_theme_mod( 'header_rotating_text', 'Software Engineer.,Freelancer.,Consultant.' ) ); ?></span></strong>
                                    <div class="header-social-links">
                                        <ul>
                                            <li><a href="<?php echo esc_url( get_theme_mod( 'facebook_link', 'https://www.facebook.com/happy.buzz' ) ); ?>" target="_blank"><i class="fa fa-facebook facebook"></i></a>
                                            </li>
                                            <li><a href="<?php echo esc_url( get_theme_mod( 'linkedin_link', 'https://www.linkedin.com/in/prasanna-bajra-bajracharya-01974162' ) ); ?>" target="_blank"><i class="fa fa-linkedin linkedin"></i></a>
                                            </li>
                                            <li><a href="<?php echo esc_url( get_theme_mod( 'instagram_link', 'https://www.instagram.com/prasannabuzz' ) ); ?>" target="_blank"><i class="fa fa-instagram instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="home-arrow-down">
                                        <a href="#about" class="smoth-scroll btn"><i class="fa fa-angle-double-down"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
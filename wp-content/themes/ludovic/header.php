
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/icon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.js"></script>
    <script  src='<?php echo get_template_directory_uri();?>/assets/js/jquery.js'></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/SwupOverlayTheme.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
    <script  src='<?php echo get_template_directory_uri();?>/assets/js/app.js'></script>



    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="loader">
    <div class="inner-loader">
        <div class="inner-loader__title-site">
            Ludovic Geheniaux
        </div>
        <div class="inner-loader__category">
            Coloriste<br/>
            Expert
        </div>
    </div>
</div>



<header class="hero-navigation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <ul>
                    <li>
                        <a href="">
                            Le salon
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Formations
                        </a>
                    </li>
                    <li>
                        <a href="">
                            à propos
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4 text-center">
                <h1 class="title-site">
                    <a href="">
                        Ludovic Geheniaux
                    </a>
                </h1>
            </div>
            <div class="col-sm-4 text-right">
                <ul>
                    <li>
                        <a href="">
                            follow @ludovicgeheniaux_paris
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Reservation
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

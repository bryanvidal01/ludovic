<?php
/*
Template Name: Homepage
*/

get_header();

?>

<div id="swup" class="transition-fade container-home">

    <div class="bloc-intro-home">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/362715101029205.5f15e58a70d17.jpg" class="bloc-intro-home__image parallax-item" data-gravity="35" data-parent="bloc-intro-home" alt="">

        <div class="bloc-intro-home__title-site">

            <span class="container-text-hidden">
                ludovic geheniaux
            </span>
        </div>

        <div class="bloc-intro-home__cat-website">
            <span class="animate-scroll">
                Colorist
            </span>
            <span class="animate-scroll">
                Expert
            </span>
            <div class="content text-paragraphe animate-scroll">
                Véritable Passionné de la couleur, rien ne me fait peur, « Tout est possible »
            </div>
        </div>

        <div class="bloc-intro-home__info-salon">
            <div class="sup-title animate-scroll">
                Bienvenue au
            </div>
            <div class="title animate-scroll">
                Salon
            </div>
            <div class="description text-paragraphe animate-scroll">
                <p>
                    Dans mon salon Parisien, on se fiche des origines, des styles vestimentaires, des comptes en banque des orientations sexuelles et tout le reste. Chaque cliente, et chaque client qui pousse la porte est toujours écouté, chouchouté, choyé.
                </p>
            </div>

            <a href="" class="link-round animate-scroll">
                Découvrir
            </a>
        </div>

        <div class="bloc-intro-home__formations">
            <div class="sup-title animate-scroll">
                2021
            </div>
            <div class="title animate-scroll">
                Forma<br/>tions
            </div>
            <div class="description text-paragraphe animate-scroll">
                <p>
                    Dans mon salon Parisien, on se fiche des origines, des styles vestimentaires, des comptes en banque des orientations sexuelles et tout le reste. Chaque cliente, et chaque client qui pousse la porte est toujours écouté, chouchouté, choyé.
                </p>
            </div>

            <a href="" class="link-round animate-scroll">
                VOIR LES DATES
            </a>
        </div>


    </div>

    <div class="container-bloc-white-black">
        <div class="marquee">
            <div class="marquee__inner" aria-hidden="true">
                <span>Lorem ipsum <strong>dolor</strong></span>
                <span>Lorem ipsum <strong>dolor</strong></span>
                <span>Lorem ipsum <strong>dolor</strong></span>
                <span>Lorem ipsum <strong>dolor</strong></span>
            </div>
        </div>
        <div class="hero">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/d70ca9115252161.604a92d8e3ff52.jpg" width="100%" alt="">
            <div class="circle active"></div>
        </div>
    </div>

    <div class="slider-round">
        <div class="bg-slider" style="background-image: url('<?= get_template_directory_uri(); ?>/assets/images/32f665114756843.6041124fbc6cf.jpg');"></div>

        <div class="marquee">
            <div class="marquee__inner" aria-hidden="true">
                <span>C'est que des cheveux</span>
                <span>C'est que des cheveux</span>
                <span>C'est que des cheveux</span>
                <span>C'est que des cheveux</span>
            </div>
        </div>


        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/32f665114756843.6041124fbc6cf.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/362715101029205.5f15e58a70d17.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/6246a4101138673.5f18217a2e115.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/d70ca9115252161.604a92d8e3ff5.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/d56b26114889175.6043c61b1f1b9.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/32f665114756843.6041124fbc6cf.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/362715101029205.5f15e58a70d17.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/6246a4101138673.5f18217a2e115.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/d70ca9115252161.604a92d8e3ff5.jpg" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/d56b26114889175.6043c61b1f1b9.jpg" alt="">
                </div>
            </div>
            <!-- If we need pagination -->

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
        </div>
    </div>

    <div class="section-biography">
        <div class="container-biography">
            <div class="background-biography">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/362715101029205.5f15e58a70d17.jpg" class="parallax-item" data-gravity="35" data-parent="section-biography" alt="">
            </div>
            <div class="content-bio animate-scroll">
                <p>
                    Dans mon salon Parisien, on se fiche des origines, des styles vestimentaires, des comptes en banque des orientations sexuelles et tout le reste. Chaque cliente, et chaque client qui pousse la porte est toujours écouté, chouchouté, choyé.
                </p>
            </div>

            <div class="title-filigrane animate-scroll">Appelle moi</div>
            <div class="sub-title animate-scroll">Chaton</div>
            <div class="container-button animate-scroll">
                <a href="" class="link-round">À propos</a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

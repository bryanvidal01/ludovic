<?php
/*
Template Name: Homepage
*/

get_header();

?>

<div id="swup" class="transition-fade container-home">

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
            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/3b6b7e43731399.595aad641891c.jpg" width="100%" alt="">
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
</div>
<?php
get_footer();

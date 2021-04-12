<?php
/*
Template Name: About
*/

get_header();
?>

<div id="swup" class="transition-fade container-about" data-bg="#2d3787" data-color="#ebc542" data-marquee="#ebc542" data-footer="#2d3787">
    <div class="intro-archive">
        <section>
            <div class="marquee">
                <div class="marquee__inner color-violet" aria-hidden="true">
                    <span><strong>À</strong><strong>Propos</strong><strong>de nous</strong></span>
                    <span><strong>À</strong><strong>Propos</strong><strong>de nous</strong></span>
                    <span><strong>À</strong><strong>Propos</strong><strong>de nous</strong></span>
                    <span><strong>À</strong><strong>Propos</strong><strong>de nous</strong></span>
                </div>
            </div>
        </section>
    </div>

    <div class="container-content-case">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 offset-sm-6">
                    <div class="description-intro-about font_RightGrotesk-WideMedium">
                        <?= get_field('page_about_introduction'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
        $page_about_image_full = get_field('page_about_image_full');

        if($page_about_image_full){
            $page_about_image_full_url = lsd_get_thumb($page_about_image_full, '2500_800');
        }
    ?>

    <?php if(isset($page_about_image_full_url) && $page_about_image_full_url): ?>
        <section class="case-single-full-image">
            <img src="<?= $page_about_image_full_url; ?>" alt="">
        </section>
    <?php endif; ?>

    <section class="image-phone">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">

                    <?php
                    $page_about_mockup = get_field('page_about_mockup');
                    $page_about_text_mockup = get_field('page_about_text_mockup');
                    if($page_about_mockup){
                        $page_about_mockup_url = lsd_get_thumb($page_about_mockup, 'full');
                    }
                    ?>
                    <?php if(isset($page_about_mockup_url) && $page_about_mockup_url): ?>
                        <img src="<?= $page_about_mockup_url; ?>" width="100%">
                    <?php endif; ?>
                </div>
                <div class="col-sm-4">
                    <div class="text-more-about">
                        <?= $page_about_text_mockup; ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php
        $page_about_image_left = get_field('page_about_image_left');

        if(isset($page_about_image_left) && $page_about_image_left){
            $page_about_image_left_url = lsd_get_thumb($page_about_image_left, '900_900');
        }

        $page_about_image_right = get_field('page_about_image_right');
        if(isset($page_about_image_right) && $page_about_image_left){
            $page_about_image_right_url = lsd_get_thumb($page_about_image_right, '900_900');
        }
    ?>

    <section class="case-single-two-images container-content-case">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <?php if(isset($page_about_image_left_url) && $page_about_image_left_url): ?>
                    <img src="<?= $page_about_image_left_url; ?>" alt="">
                    <?php endif; ?>
                </div>
                <div class="col-sm-6">
                    <?php if(isset($page_about_image_right_url) && $page_about_image_right_url): ?>
                    <img src="<?= $page_about_image_right_url; ?>" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php lsd_get_template_part('general', 'block', 'instagram'); ?>
</div>

<?php
get_footer();

<?php
    $args = array(
        'post_type' => 'instagram',
        'posts_per_page' => 7,
        'post_status' => 'publish',
    );
    $the_query = new WP_Query( $args );
?>


<section class="section-instagram">
    <?php if ( $the_query->have_posts() ): ?>
    <div class="posts-insta">

        <?php $i = 1; while ( $the_query->have_posts() ):
            $the_query->the_post();
            $image_instagram = get_field('image_instagram');

            $image_instagram_url = '';
            if($image_instagram){
                $image_instagram_url = lsd_get_thumb($image_instagram, 'large');
            }
        ?>
            <?php if(isset($image_instagram_url) && $image_instagram_url): ?>
                <img src="<?= $image_instagram_url; ?>" class="image-<?= $i; ?>" alt="">
            <?php endif; ?>
        <?php $i++;  endwhile; ?>
    </div>
    <?php endif; ?>

    <div class="container-title-section text-uppercase color-green">
        <div class="font_RightGrotesk-TightMedium">MIAM STRAM</div>
        <div class="font_RightGrotesk-SpatialBlack">gram</div>
        <div>
            <a href="<?= get_field('params_instagram','option'); ?>" target="_blank" class="link-insta ">@lafcrceagency</a>
        </div>
    </div>
</section>

<?php wp_reset_postdata(); ?>

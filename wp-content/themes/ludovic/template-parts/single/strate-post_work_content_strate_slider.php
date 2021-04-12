<?php
    $post_work_content_strate_slider_images = get_sub_field('post_work_content_strate_slider_images');
    if($post_work_content_strate_slider_images):
?>

<section class="case-carrousel">
    <div class="carousel slider">
        <?php foreach ($post_work_content_strate_slider_images as $post_work_content_strate_slider_image):
            $post_work_content_strate_slider_image_ID = $post_work_content_strate_slider_image['image'];
            if($post_work_content_strate_slider_image_ID):
                $post_work_content_strate_slider_image_URL = lsd_get_thumb($post_work_content_strate_slider_image_ID, 'large');
            endif;
        ?>
            <div>
                <img src="<?= $post_work_content_strate_slider_image_URL; ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php endif; ?>

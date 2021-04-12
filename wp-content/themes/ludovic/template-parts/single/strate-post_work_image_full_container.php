<?php
    $post_work_image_full_container_image = get_sub_field('post_work_image_full_container_image');

    if($post_work_image_full_container_image):
        $post_work_image_full_container_image_URL = lsd_get_thumb($post_work_image_full_container_image, 'full');
    endif;
?>
<section class="case-image-full-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="container-image-parallax">
                    <img src="<?= $post_work_image_full_container_image_URL; ?>" class="parallax-item" data-gravity="30" data-parent="case-image-full-container" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

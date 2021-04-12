<?php
    $post_work_content_strate_two_image_left = get_sub_field('post_work_content_strate_two_image_left');

    if($post_work_content_strate_two_image_left):
        $post_work_content_strate_two_image_left_URL = lsd_get_thumb($post_work_content_strate_two_image_left, 'full');
    endif;


    $post_work_content_strate_two_image_right = get_sub_field('post_work_content_strate_two_image_right');

    if($post_work_content_strate_two_image_right):
        $post_work_content_strate_two_image_right_URL = lsd_get_thumb($post_work_content_strate_two_image_right, 'full');
    endif;
?>

<section class="case-two-image">
    <div class="container-fluid">
        <div class="row">
            <?php if(isset($post_work_content_strate_two_image_left_URL) && $post_work_content_strate_two_image_left_URL): ?>
            <div class="col-sm-6">
                <div class="container-image-parallax">
                    <img src="<?= $post_work_content_strate_two_image_left_URL; ?>" class="parallax-item" data-gravity="30" data-parent="case-two-image" alt="">
                </div>
            </div>
            <?php endif; ?>

            <?php if(isset($post_work_content_strate_two_image_right_URL) && $post_work_content_strate_two_image_right_URL): ?>
            <div class="col-sm-6">
                <div class="container-image-parallax">
                    <img src="<?= $post_work_content_strate_two_image_right_URL; ?>" class="parallax-item" data-gravity="30" data-parent="case-two-image" alt="">
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

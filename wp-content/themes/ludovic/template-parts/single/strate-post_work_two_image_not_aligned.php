<?php
    $post_work_two_image_not_aligned_image_left = get_sub_field('post_work_two_image_not_aligned_image_left');

    if($post_work_two_image_not_aligned_image_left):
        $post_work_two_image_not_aligned_image_left_URL = lsd_get_thumb($post_work_two_image_not_aligned_image_left, 'large');
    endif;

    $post_work_two_image_not_aligned_image_right = get_sub_field('post_work_two_image_not_aligned_image_right');

    if($post_work_two_image_not_aligned_image_right):
        $post_work_two_image_not_aligned_image_right_URL = lsd_get_thumb($post_work_two_image_not_aligned_image_right, 'large');
    endif;

?>

<section class="case-two-image-not-aligned">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <?php if(isset($post_work_two_image_not_aligned_image_left_URL) && $post_work_two_image_not_aligned_image_left_URL): ?>
                <div class="container-image-parallax">
                    <img src="<?= $post_work_two_image_not_aligned_image_left_URL; ?>" class="img-1 parallax-item" data-gravity="40" data-parent="case-two-image-not-aligned" alt="">
                </div>
                <?php endif; ?>
            </div>
            <div class="col-sm-6">
                <?php if(isset($post_work_two_image_not_aligned_image_right_URL) && $post_work_two_image_not_aligned_image_right_URL): ?>
                <div class="container-image-parallax img-2">
                    <img src="<?= $post_work_two_image_not_aligned_image_right_URL; ?>" class="parallax-item" data-gravity="30" data-parent="case-two-image-not-aligned" alt="">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

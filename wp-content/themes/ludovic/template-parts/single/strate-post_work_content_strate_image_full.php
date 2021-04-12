<?php
    $post_work_content_strate_image_full_content = get_sub_field('post_work_content_strate_image_full_content');

    if($post_work_content_strate_image_full_content):
        $post_work_content_strate_image_full_content_URL = lsd_get_thumb($post_work_content_strate_image_full_content, 'full');
    endif;

    if($post_work_content_strate_image_full_content_URL):
?>

<section class="case-image-full">
    <div class="container-image-parallax">
        <img src="<?= $post_work_content_strate_image_full_content_URL; ?>" alt="" class="parallax-item" data-gravity="50" data-parent="case-image-full">
    </div>
</section>
<?php endif; ?>

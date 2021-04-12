<?php
    $work_content_two_images_image_left_id = get_sub_field('work_content_two_images_image_left');
    if($work_content_two_images_image_left_id){
        $work_content_two_images_image_left_url = lsd_get_thumb($work_content_two_images_image_left_id, '900_1200');
    }

    $work_content_two_images_image_right_id = get_sub_field('work_content_two_images_image_right');
    if($work_content_two_images_image_right_id){
        $work_content_two_images_image_right_url = lsd_get_thumb($work_content_two_images_image_right_id, '900_1200');
    }
?>

<section class="case-single-two-images container-content-case">
    <div class="container-fluid">
        <div class="row">
            <?php if(isset($work_content_two_images_image_left_url) && $work_content_two_images_image_left_url): ?>
            <div class="col-sm-6">
                <img src="<?= $work_content_two_images_image_left_url; ?>" alt="">
            </div>
            <?php endif; ?>

            <?php if(isset($work_content_two_images_image_right_url) && $work_content_two_images_image_right_url): ?>
            <div class="col-sm-6">
                <img src="<?= $work_content_two_images_image_right_url; ?>" alt="">
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

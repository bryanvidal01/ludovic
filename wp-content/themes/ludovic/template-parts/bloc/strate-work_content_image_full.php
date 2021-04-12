<?php

    $work_content_image_full_id = get_sub_field('work_content_image_full_image');
    if($work_content_image_full_id){
        $work_content_image_full_url = lsd_get_thumb($work_content_image_full_id, '2500_800');
    }
?>

<?php if(isset($work_content_image_full_url) && $work_content_image_full_url): ?>
<section class="case-single-full-image">
    <img src="<?= $work_content_image_full_url; ?>" alt="">
</section>

<?php endif; ?>

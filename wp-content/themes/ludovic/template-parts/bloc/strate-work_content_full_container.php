<?php
    $work_content_full_container_content_id = get_sub_field('work_content_full_container_content');

    if($work_content_full_container_content_id){
        $work_content_full_container_content_url = lsd_get_thumb($work_content_full_container_content_id, '1920_0');
    }

?>


<?php if(isset($work_content_full_container_content_url) && $work_content_full_container_content_url): ?>
<section class="case-single-video-image-full-container container-content-case">
    <img src="<?= $work_content_full_container_content_url; ?>" alt="">
</section>
<?php endif; ?>

<?php
    $work_content_video_content = get_sub_field('work_content_video_content');
?>

<?php if($work_content_video_content): ?>
<section class="case-single-video-image-full-container container-content-case">
    <?= $work_content_video_content; ?>
</section>
<?php endif; ?>

<?php
    $post_work_video_video = get_sub_field('post_work_video_video');
?>
<section class="case-video-full-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <video src="<?= $post_work_video_video; ?>" autoplay loop muted></video>
            </div>
        </div>
    </div>
</section>

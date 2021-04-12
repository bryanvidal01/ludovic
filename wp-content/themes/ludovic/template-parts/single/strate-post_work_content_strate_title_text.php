<?php
    $post_work_content_strate_title_text_title = get_sub_field('post_work_content_strate_title_text_title');
    $post_work_content_strate_title_text_text = get_sub_field('post_work_content_strate_title_text_text');
?>

<section class="case-title-text">
    <div class="container-fluid">
        <div class="col-sm-6 offset-sm-5">
            <h3 class="title medium title-strate">
                <?= $post_work_content_strate_title_text_title; ?>
            </h3>
            <div class="text-content">
                <?= $post_work_content_strate_title_text_text; ?>
            </div>
        </div>
    </div>
</section>

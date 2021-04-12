<?php
    $post_work_content_strate_intro_case_text_content = get_sub_field('post_work_content_strate_intro_case_text_content');

    if($post_work_content_strate_intro_case_text_content):
?>
<section class="intro-case-text">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 offset-sm-2 col-12">
                <?= $post_work_content_strate_intro_case_text_content; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
    $post_work_content_strate_tastimonial_category = get_sub_field('post_work_content_strate_tastimonial_category');
    $post_work_content_strate_tastimonial_title = get_sub_field('post_work_content_strate_tastimonial_title');
    $post_work_content_strate_tastimonial_text = get_sub_field('post_work_content_strate_tastimonial_text');
?>

<section class="case-title-text-category">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <?php if($post_work_content_strate_tastimonial_category): ?>
                <div class="category sans-serif uppercase small">
                    <?= $post_work_content_strate_tastimonial_category; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-sm-9">
                <?php if($post_work_content_strate_tastimonial_title): ?>
                <h3 class="title medium title-strate">
                    <?= $post_work_content_strate_tastimonial_title; ?>
                </h3>
                <?php endif; ?>

                <?php if($post_work_content_strate_tastimonial_text): ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="text-content">
                            <?= $post_work_content_strate_tastimonial_text; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

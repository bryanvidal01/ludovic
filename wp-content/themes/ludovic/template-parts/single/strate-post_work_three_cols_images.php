<?php
    $post_work_three_cols_images_col_1 = get_sub_field('post_work_three_cols_images_col_1');
    $post_work_three_cols_images_col_2 = get_sub_field('post_work_three_cols_images_col_2');
    $post_work_three_cols_images_col_3 = get_sub_field('post_work_three_cols_images_col_3');
?>

<section class="three-cols-images">
    <div class="container-fluid">
        <div class="row">
            <?php if($post_work_three_cols_images_col_1): ?>
            <div class="col-sm-4 parallax-item" data-gravity="-20" data-parent="three-cols-images">
                <div class="hide-space"></div>
                <?php foreach ($post_work_three_cols_images_col_1 as $post_work_three_cols_images_col_1_item):
                    $post_work_three_cols_images_col_1_image_ID = $post_work_three_cols_images_col_1_item['post_work_three_cols_images_col_1_image'];
                    if($post_work_three_cols_images_col_1_image_ID):
                        $post_work_three_cols_images_col_1_image_URL = lsd_get_thumb($post_work_three_cols_images_col_1_image_ID, 'presentationPortraitSize');
                    endif;
                ?>
                    <img src="<?= $post_work_three_cols_images_col_1_image_URL; ?>" alt="">
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if($post_work_three_cols_images_col_2): ?>
            <div class="col-sm-4 parallax-item" data-gravity="20" data-parent="three-cols-images">
                <?php foreach ($post_work_three_cols_images_col_2 as $post_work_three_cols_images_col_2_item):
                $post_work_three_cols_images_col_2_image_ID = $post_work_three_cols_images_col_2_item['post_work_three_cols_images_col_2_image'];
                if($post_work_three_cols_images_col_2_image_ID):
                    $post_work_three_cols_images_col_2_image_URL = lsd_get_thumb($post_work_three_cols_images_col_2_image_ID, 'presentationPortraitSize');
                endif;
                ?>
                    <img src="<?= $post_work_three_cols_images_col_2_image_URL; ?>" alt="">
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if($post_work_three_cols_images_col_3): ?>
                <div class="col-sm-4 parallax-item" data-gravity="-20" data-parent="three-cols-images">
                    <div class="hide-space"></div>
                    <?php foreach ($post_work_three_cols_images_col_3 as $post_work_three_cols_images_col_3_item):
                        $post_work_three_cols_images_col_3_image_ID = $post_work_three_cols_images_col_3_item['post_work_three_cols_images_col_3_image'];
                        if($post_work_three_cols_images_col_3_image_ID):
                            $post_work_three_cols_images_col_3_image_URL = lsd_get_thumb($post_work_three_cols_images_col_3_image_ID, 'presentationPortraitSize');
                        endif;
                        ?>
                        <img src="<?= $post_work_three_cols_images_col_3_image_URL; ?>" alt="">
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

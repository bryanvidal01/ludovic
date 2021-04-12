<?php
    $work_content_slider_items = get_sub_field('work_content_slider_items');
?>

<?php if($work_content_slider_items): ?>
<section class="case-single-carrousel">
    <div class="carousel slider">

        <?php
        foreach ($work_content_slider_items as $work_content_slider_item):
            if(isset($work_content_slider_item['work_content_slider_images_item']) && $work_content_slider_item['work_content_slider_images_item']){
                $work_content_slider_item_image_id = $work_content_slider_item['work_content_slider_images_item'];

                if($work_content_slider_item_image_id){
                    $work_content_slider_item_image_url = lsd_get_thumb($work_content_slider_item_image_id, '400_800');
                }
            }
        ?>
        <?php if(isset($work_content_slider_item_image_url) && $work_content_slider_item_image_url): ?>
        <div class="container-mockup">
            <div class="mockupPhone">
                <img src="<?= $work_content_slider_item_image_url; ?>">
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

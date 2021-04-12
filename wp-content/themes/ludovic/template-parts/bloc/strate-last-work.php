<?php
    $listProjectsIDs = get_field('page_home_realisations');
?>

<?php if($listProjectsIDs): ?>
<section class="listing-projects">
    <div class="container-mockup" style="background-color: <?= $work_color = get_field('work_color', reset($listProjectsIDs));?>">
        <div class="mockupPhone">

            <?php
            $project = 0;
            foreach ($listProjectsIDs as $listProjectID):
                $work_video_preview = get_field('work_video_preview', $listProjectID);

                if(!$work_video_preview){
                    $work_photo_preview_id = get_field('work_image_preview', $listProjectID);

                    if($work_photo_preview_id){
                        $work_photo_preview_url = lsd_get_thumb($work_photo_preview_id, 'large');
                    }
                }

                $project ++;
            ?>
                <?php if($work_video_preview): ?>
                    <video src="<?= $work_video_preview; ?>" width="400" height="860" id="project-<?= $project; ?>" autoplay loop muted <?= ($project == 1)? '' : 'style="display: none"'?>></video>
                <?php elseif (isset($work_photo_preview_url) && $work_photo_preview_url): ?>
                    <img src="<?= $work_photo_preview_url; ?>" width="400" height="860" alt="" id="project-<?= $project; ?>" <?= ($project == 1)? '' : 'style="display: none"'?>>
                <?php endif; ?>
            <?php endforeach; ?>

        </div>
    </div>

    <?php
    $project = 0;
    foreach ($listProjectsIDs as $listProjectID):
        $work_title_1 = get_field('work_title_1', $listProjectID);
        $work_title_2 = get_field('work_title_2', $listProjectID);
        $work_title_3 = get_field('work_title_3', $listProjectID);


        $work_introduction = get_field('work_introduction', $listProjectID);
        $work_color = get_field('work_color', $listProjectID);

        $work_logo_id = get_field('work_logo', $listProjectID);
        if($work_logo_id){
            $work_logo_url = lsd_get_thumb($work_logo_id, 'large');
        }

        $work_image_preview_id = get_field('work_image_preview', $listProjectID);
        if($work_image_preview_id){
            $work_image_preview_id_url = lsd_get_thumb($work_image_preview_id, 'large');
        }

        $project++;

    ?>
        <div class="project" data-id="project-<?= $project; ?>" data-color="<?= $work_color; ?>">
            <a href="<?= get_the_permalink($listProjectID); ?>" class="container-info-project">
                <?php if(isset($work_logo_url) && $work_logo_url): ?>
                <img src="<?= $work_logo_url; ?>" width="150" class="logo" alt="">
                <?php endif; ?>

                <?php if($work_title_1): ?>
                <div class="font_RightGrotesk-Medium text-uppercase" style="color: <?= $work_color; ?>;">
                    <?= $work_title_1; ?>
                </div>
                <?php endif; ?>

                <?php if($work_title_2): ?>
                <div class="font_RightGrotesk-SpatialBlack" style="color: <?= $work_color; ?>">
                    <?= $work_title_2; ?>
                </div>
                <?php endif; ?>

                <?php if($work_title_3): ?>
                <div class="font_RightGrotesk-Medium" style="color: <?= $work_color; ?>"><?= $work_title_3; ?></div>
                <?php endif; ?>

                <div class="description-project">
                    <?= $work_introduction; ?>
                </div>

                <?php if($work_image_preview_id_url): ?>
                <div class="container-mockup-mobile visible-mobile" style="background-color: <?= $work_color; ?>;">
                    <div class="mockupPhone">
                        <img src="<?= $work_image_preview_id_url; ?>" width="400" height="860" alt="">
                    </div>
                </div>
                <?php endif; ?>
            </a>
        </div>
    <?php endforeach; ?>
</section>
<?php endif; ?>

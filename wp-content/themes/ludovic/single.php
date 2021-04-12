<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header();


$work_introduction = get_field('work_introduction');
$work_date = get_field('work_date');
$work_category = get_field('work_category');
$work_logo_id = get_field('work_logo');

$colorProject = get_field('work_color');

if($work_logo_id){
    $work_logo_url = lsd_get_thumb($work_logo_id, 'medium');
}
?>
<div id="swup" class="transition-fade" data-bg="#fff" data-color="<?= $colorProject; ?>" data-marquee="#ebc542" data-footer="#583f9a">
    <div class="intro-single container-content-case">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="title-case-single font_RightGrotesk-SpatialBlack">
                        <?php echo get_the_title(); ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <?= $work_introduction; ?>
                </div>
            </div>
            <div class="row sup-info-hero">
                <div class="col-sm-3 col-4">
                    <div class="date font_RightGrotesk-TightMedium">
                        <?= $work_date; ?>
                    </div>
                </div>
                <div class="col-sm-5 col-8">
                    <div class="category font_RightGrotesk-CompactBlack text-uppercase">
                        <?= $work_category; ?>
                    </div>
                </div>
                <div class="col-sm-4">
                    <?php if(isset($work_logo_url) && $work_logo_url): ?>
                    <img src="<?= $work_logo_url ?>" width="150" class="logo" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    if( have_rows('work_content') ):
        while ( have_rows('work_content') ) : the_row();
            lsd_get_template_part('bloc', 'strate', get_row_layout());
        endwhile;

    endif;

    ?>

    <div class="pagination-project">
        <div class="title-section-pagination">
            <span class="font_RightGrotesk-NarrowLight">À</span> <span class="font_RightGrotesk-SpatialBlack">SUIVRE</span>
        </div>
        <div class="row">
                <?php
                $previousPost = get_previous_post();

                if($previousPost){
                    $previousPostID = $previousPost->ID;

                    $work_image_preview_previous = get_field('work_image_preview', $previousPostID);

                    if($work_image_preview_previous){
                        $work_image_preview_previous_url = lsd_get_thumb($work_image_preview_previous, '1200_1200');
                    }
                }

                ?>
                <?php if(isset($previousPostID) && $previousPostID): ?>
                <div class="col-sm-6">
                    <a href="<?= get_the_permalink($previousPostID); ?>" class="push-project">
                        <?php if(isset($work_image_preview_previous_url) && $work_image_preview_previous_url): ?>
                            <img src="<?= $work_image_preview_previous_url; ?>" alt="">
                        <?php endif; ?>
                        <div class="title-case"><?= get_the_title($previousPostID); ?></div>
                    </a>
                </div>
                <?php endif; ?>

            <?php
                $nextPost = get_next_post();

                if($nextPost){
                    $nextPostID = $nextPost->ID;

                    $work_image_preview_next = get_field('work_image_preview', $nextPostID);

                    if($work_image_preview_next){
                        $work_image_preview_next_url = lsd_get_thumb($work_image_preview_next, '1200_1200');
                    }
                }

            ?>
            <?php if(isset($nextPostID) && $nextPostID): ?>
                <div class="col-sm-6">
                    <a href="<?= get_the_permalink($nextPostID); ?>" class="push-project">
                        <?php if(isset($work_image_preview_next_url) && $work_image_preview_next_url): ?>
                            <img src="<?= $work_image_preview_next_url; ?>" alt="">
                        <?php endif; ?>
                        <div class="title-case"><?= get_the_title($nextPostID); ?></div>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();

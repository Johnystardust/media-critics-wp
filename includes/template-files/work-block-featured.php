<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        12/2/2015
 * Time:        12:04 PM
 *
 * @package Media Critics
 */
?>

<div class="work-block featured col-md-12 no-padding">
    <?php $background = get_field('thumb'); ?>
    <div class="work-image" style="background-image: url(<?php echo $background; ?>); ">
        <div class="featured-inner">
            <div class="col-md-4 col">
                <div class="work-logo">
                    <img width="<?php echo the_field('logo_width').'%'; ?>" src="<?php the_field('thumb_logo'); ?>" />
                </div>
            </div>
        </div>
    </div>

    <div class="featured-inner">
        <div class="col-md-4 col">
            <div class="work-content">
                <h2><?php the_field('headline'); ?></h2>
                <hr/>
                <h4><?php the_field('subline'); ?></h4>
            </div>

            <div class="work-more">
                <span>
                    <a href="<?php the_permalink(); ?>" class="button"><span class="txt">Lees meer</span><span class="bg"></span></a>
                </span>
            </div>

            <div class="work-category"><?php the_category(' | '); ?></div>
        </div>

        <div class="col-md-8 col">
            <img src="<?php the_field('thumbnail_preview') ?>" />
        </div>
    </div>

    <?php $color = get_field('overlay_color'); ?>
    <div class="work-fade" style="background: <?php echo $color; ?>!important"></div>
</div>
<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/26/2015
 * Time:        9:39 AM
 *
 * @package Media Critics
 */
?>

<div class="work-block col-md-6 col-sm-6 no-padding">
    <?php $background = get_field('thumb'); ?>
    <div class="work-image" style="background-image: url(<?php echo $background; ?>); ">
        <div class="work-logo">
            <img width="<?php $percentage = get_field('logo_width') / 1.3; echo $percentage.'%'; ?>" src="<?php the_field('thumb_logo'); ?>" />
        </div>
    </div>

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

    <?php $color = get_field('overlay_color'); ?>
    <div class="work-fade" style="background: <?php echo $color; ?>!important"></div>
</div>
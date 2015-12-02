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

<div class="work-block col-md-4 no-padding" data-number="<?php echo $x; ?>">
    <div class="work-image">
        <img src="<?php the_field('thumb'); ?>" alt="" width="100%"/>

        <div class="work-logo">
            <img src="<?php the_field('thumb_logo'); ?>" />
        </div>

        <div class="work-overlay">
            <div class="overlay-inside">
                <span>
                    <h2><?php the_title(); ?></h2>
                    <hr/>
                    <h4><?php the_category(' '); ?></h4>
                </span>
            </div>
        </div>
    </div>

    <div class="work-info">
        <h2><?php the_title(); ?></h2>
        <span class="work-text"><?php the_field('content'); ?></span>

        <a href="<?php the_permalink(); ?>" class="button"><span class="txt">Lees meer</span><span class="bg"></span></a>
        <a href="#" class="close-button button-close-work"><i class="icon icon-cancel-1"></i><span class="bg"></span></a>
    </div>
</div>
<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/24/2015
 * Time:        3:35 PM
 *
 * @package Media Critics
 */
?>

<div id="header-small" class="container-fluid no-padding">
    <div class="overlay" style="color: <?php the_sub_field('text_color'); ?>; text-shadow: <?php the_sub_field('text_shadow_color'); ?> 1px 1px 1px;">
        <div class="headline">
           <h1><?php the_sub_field('title'); ?></h1>
        </div>
        <div class="subline">
           <hr/>
           <h3><?php the_sub_field('subtitle'); ?></h3>
        </div>
    </div>

    <img src="<?php the_sub_field('image'); ?>" alt="" width="100%"/>
</div>
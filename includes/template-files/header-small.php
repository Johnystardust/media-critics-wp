<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/26/2015
 * Time:        2:34 PM
 *
 * @package Media Critics
 */
?>

<div id="header-small" class="container-fluid no-padding">
    <div class="overlay" style="color: <?php the_field('text_color'); ?>; text-shadow: <?php the_field('text_shadow_color'); ?> 1px 1px 1px;">
        <?php
        /*
        |----------------------------------------------------------------
        |   If the title or subtitle aren't set don't display them.
        |----------------------------------------------------------------
        */
        $title = get_field('title');
        $subtitle = get_field('subtitle');

        if(!empty($title)){
            ?>
            <div class="headline">
                <h1><?php the_field('title'); ?></h1>
            </div>
            <?php

            if(!empty($subtitle)){
                ?>
                <div class="subline">
                    <hr/>
                    <h3><?php the_field('subtitle'); ?></h3>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <img src="<?php the_field('image'); ?>" alt="" width="100%"/>
</div>
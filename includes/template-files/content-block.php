<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        12/17/2015
 * Time:        1:14 PM
 *
 * @package Media Critics
 */
?>

<div class="container-fluid container-capped">
    <div class="headline">
        <h2 class="no-margin"><?php the_field('title_text'); ?></h2>
        <hr/>
    </div>
    <div class="subline">
        <hr/>
        <h3><?php the_field('subtitle_text'); ?></h3>
    </div>

    <div class="text">
        <?php the_field('content_text'); ?>
    </div>
</div>
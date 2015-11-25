<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/24/2015
 * Time:        2:53 PM
 *
 * @package Media Critics
 */
?>

<div id="text-title-subtitle" class="container-fluid container-capped">
    <div class="row">
        <div class="col-md-12">
            <span class="headline">
                <h2 class="no-margin"><?php the_sub_field('title'); ?></h2>
                <hr/>
            </span>
             <span class="subline">
                <hr/>
                <h3><?php the_sub_field('subtitle'); ?></h3>
            </span>

            <div class="text">
                <p>
                    <?php the_sub_field('text'); ?>
                </p>
            </div>
        </div>
    </div>
</div>
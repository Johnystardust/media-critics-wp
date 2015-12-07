<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        12/1/2015
 * Time:        4:02 PM
 *
 * @package Media Critics
 */
?>

<div id="work-footer" class="container-fluid no-padding" style="background-image: url(<?php the_field('footer_image'); ?>)">
    <div class="footer-overlay" style="background: <?php the_field('footer_overlay_color'); ?>"></div>
    <div class="text">
        <p>
            <?php the_field('footer_text'); ?>
        </p>
    </div>
</div>

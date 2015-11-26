<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/25/2015
 * Time:        9:08 AM
 *
 * @package Media Critics
 */
?>

<div id="form" class="container-fluid container-capped">
    <div class="col-md-12">
        <?php
            $shortcode = get_sub_field('contact_form_shortcode');
            echo do_shortcode($shortcode);
        ?>
    </div>
</div>


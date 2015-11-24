<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/24/2015
 * Time:        3:22 PM
 *
 * @package Media Critics
 */
?>

<div id="link-block" class="container-fluid no-padding">

    <div class="row">
        <div class="col-md-12">
            <h2><?php the_sub_field('title'); ?></h2>
            <hr/>
            <a href="<?php the_sub_field('link'); ?>" class="button"><span class="txt"><?php the_sub_field('link_name'); ?></span><span class="bg"></span></a>
        </div>
    </div>

</div>
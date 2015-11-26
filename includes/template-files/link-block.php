<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/26/2015
 * Time:        2:36 PM
 *
 * @package Media Critics
 */
?>

<div id="link-block" class="container-fluid no-padding">

    <div class="row">
        <div class="col-md-12">
            <h2><?php the_field('link_title'); ?></h2>
            <hr/>
            <a href="<?php the_field('link'); ?>" class="button"><span class="txt"><?php the_field('link_name'); ?></span><span class="bg"></span></a>
        </div>
    </div>

</div>
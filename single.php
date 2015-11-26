<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/26/2015
 * Time:        1:55 PM
 *
 * @package Media Critics
 */

get_header();

if(have_posts()){

    while(have_posts()) : the_post();

        /*
        |----------------------------------------------------------------
        |   Get the header.
        |----------------------------------------------------------------
        */
        get_template_part('includes/template-files/header-small'); ?>


        <div id="content" class="container-fluid container-capped">
            <div class="row">
                <div class="col-md-12">

                    <div class="text">
                        <?php the_field('content'); ?>
                    </div>

                </div>
            </div>

        </div>

        <?php
        /*
        |----------------------------------------------------------------
        |   Get the link block.
        |----------------------------------------------------------------
        */
        get_template_part('includes/template-files/link-block');

        //get_template_part('includes/acf/flexible-content');

    endwhile;
}
else {
    echo 'Sorry no posts matched your criteria';
}

wp_reset_postdata();

get_footer();

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

                    <span class="headline">
                        <h2 class="no-margin"><?php the_field('headline'); ?></h2>
                        <hr/>
                    </span>
                     <span class="subline">
                        <hr/>
                        <h3><?php the_field('subline'); ?></h3>
                    </span>

                    <div class="content">
                        <?php the_field('content'); ?>
                    </div>

                </div>
            </div>
        </div>

        <?php
        /*
        |----------------------------------------------------------------
        |   Get the post-menu block.
        |----------------------------------------------------------------
        */
        get_template_part('includes/template-files/post-menu');

        /*
        |----------------------------------------------------------------
        |   Get the work-footer block.
        |----------------------------------------------------------------
        */
        get_template_part('includes/template-files/work-footer');

        /*
        |----------------------------------------------------------------
        |   Get the link block.
        |----------------------------------------------------------------
        */
        get_template_part('includes/template-files/link-block');

        /*
        |----------------------------------------------------------------
        |   Get the latest-work block.
        |----------------------------------------------------------------
        */
        get_template_part('includes/acf/parts/latest-work');

    endwhile;
}
else {
    echo 'Sorry no posts matched your criteria';
}

wp_reset_postdata();

get_footer();

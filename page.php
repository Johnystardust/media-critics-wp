<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/24/2015
 * Time:        12:51 PM
 *
 * @package Media Critics
 */

get_header();

if(have_posts()){

    while(have_posts()) : the_post(); ?>

        <?php get_template_part('includes/acf/flexible-content'); ?>

    <?php endwhile;
}
else {
    echo 'Sorry no posts matched your criteria';
}

wp_reset_postdata();

get_footer();
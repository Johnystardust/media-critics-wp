<?php
/* Template Name: Portfolio Template */

/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/25/2015
 * Time:        10:11 AM
 *
 * @package Media Critics
 */

get_header();

if(have_posts()){

    while(have_posts()) : the_post(); ?>

        <div id="header-small" class="container-fluid no-padding">
            <div class="overlay">
                <span class="headline">
                    <h1><?php the_field('title'); ?></h1>
                </span>
                 <span class="subline">
                    <hr/>
                    <h3><?php the_field('subtitle'); ?></h3>
                </span>
            </div>

            <img src="<?php the_field('image'); ?>" alt="" width="100%"/>
        </div>





        <div id="link-block" class="container-fluid no-padding">

            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_field('link_title'); ?></h2>
                    <hr/>
                    <a href="<?php the_field('link'); ?>" class="button"><span class="txt"><?php the_field('link_name'); ?></span><span class="bg"></span></a>
                </div>
            </div>

        </div>

    <?php endwhile;
}
else {
    echo 'Sorry no posts matched your criteria';
}

wp_reset_postdata();

get_footer();
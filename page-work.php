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

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Header.
|-----------------------------------------------------------------------------------------------------------------------
*/
?>
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

<?php
/*
|-----------------------------------------------------------------------------------------------------------------------
|   Portfolio.
|-----------------------------------------------------------------------------------------------------------------------
*/
?>
<div id="page-work" class="container-fluid no-padding">

    <?php
    $i = 1;
    $args = array('post_type' => 'portfolio');
    $the_query = new WP_Query($args);
    /*
    |----------------------------------------------------------------
    |   Check if the query returns any posts, if true render the
    |   posts. If false return a warning for the user.
    |----------------------------------------------------------------
    */
    if($the_query->have_posts()) {

        while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <div class="work-block col-md-4 no-padding" data-number="<?php echo $i; ?>">
                <div class="work-image">
                    <img src="<?php the_field('thumb'); ?>" alt="" width="100%"/>

                    <div class="work-overlay">
                        <div class="overlay-inside">
                            <span>
                                <h2><?php the_title(); ?></h2>
                                <hr/>
                                <h4>Categorie <?php // the_category(); ?></h4>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="work-info">
                    <h2><?php the_title(); ?></h2>
                    <span class="work-text"><?php the_field('content'); ?></span>

                    <a href="#" class="button"><span class="txt">Lees meer</span><span class="bg"></span></a>
                    <a href="#" class="close-button"><i class="icon icon-cancel-1"></i><span class="bg"></span></a>
                </div>
            </div>

            <?php
            if($i > 3){
                $i = 1;
            }
            else {
                $i++;
            }
            ?>

        <?php endwhile;
    }
    else {
        echo 'Sorry no posts matched your criteria';
    }

    wp_reset_postdata();
    ?>

</div>

<?php
/*
|-----------------------------------------------------------------------------------------------------------------------
|   Link block.
|-----------------------------------------------------------------------------------------------------------------------
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

<?php get_footer();
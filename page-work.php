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
    $i = 0;
    $x = 1;
    $args = array('post_type' => 'portfolio');
    $the_query = new WP_Query($args);
    $posts = $the_query->post_count;
    /*
    |----------------------------------------------------------------
    |   Check if the query returns any posts, if true render the
    |   posts. If false return a warning for the user.
    |----------------------------------------------------------------
    */
    if($the_query->have_posts()) {

        while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <?php
            /*
            |----------------------------------------------------------------
            |   Place an opening div for the row if the $i number is 0.
            |----------------------------------------------------------------
            */
            if($i % 3 == 0){
                echo '<div class="row no-margin work-row">';
            }
            ?>
            <div class="work-block col-md-4 no-padding" data-number="<?php echo $x; ?>">
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
            <?
            /*
            |----------------------------------------------------------------
            |   Increment the variables.
            |----------------------------------------------------------------
            */
            $i++;
            $x++;

            /*
            |----------------------------------------------------------------
            |   Place an closing div for the row if the $i number is 3.
            |----------------------------------------------------------------
            */
            if($i % 3 == 0){
                echo '</div>';
                $x = 1;
            }
            ?>

        <?php endwhile;
        /*
        |----------------------------------------------------------------
        |   If the posts in a row is not 3 add a empty project div.
        |----------------------------------------------------------------
        */
        if($i == 5 || $i == 8 || $i == 11){
            ?>
            <div class="work-block-empty col-md-4 no-padding " data-number="<?php echo $x; ?>">
                <div class="work-image">
                    <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/empty-thumb.png' ?>" alt="" width="100%"/>
                </div>
            </div>
            <?php
        }
        if($i == 4 || $i == 7 || $i == 10){
            ?>
            <div class="work-block-empty col-md-4 no-padding " data-number="<?php echo $x; ?>">
                <div class="work-image">
                    <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/empty-thumb.png' ?>" alt="" width="100%"/>
                </div>
            </div>
            <div class="work-block-empty col-md-4 no-padding " data-number="<?php echo $x; ?>">
                <div class="work-image">
                    <img src="<?php echo get_stylesheet_directory_uri().'/assets/images/empty-thumb.png' ?>" alt="" width="100%"/>
                </div>
            </div>
        <?php
        }


        /*
        |----------------------------------------------------------------
        |   Place an closing div for the row if the loop is over and
        |   are not a dividable by 3.
        |----------------------------------------------------------------
        */
        if($i % 3 != 0){
            echo '</div>';
        }
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
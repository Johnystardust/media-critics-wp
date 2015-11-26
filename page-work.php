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
get_template_part('includes/template-files/header-small');

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

            /*
            |----------------------------------------------------------------
            |   Get an work block.
            |
            |   The 'include(locate_template())' function is used so we can
            |   use the $x parameter
            |----------------------------------------------------------------
            */
            include(locate_template('includes/template-files/work-block.php'));

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
            if($i % 3 == 0) {
                echo '</div>';
                $x = 1;
            }

        endwhile;
        /*
        |----------------------------------------------------------------
        |   If the posts in a row is not 3 add a empty project div.
        |----------------------------------------------------------------
        */
        if($i == 2 || $i == 5 || $i == 8 || $i == 11){
            get_template_part('includes/template-files/work-block-empty');
        }
        if($i == 1 || $i == 4 || $i == 7 || $i == 10){
            get_template_part('includes/template-files/work-block-empty');
            get_template_part('includes/template-files/work-block-empty');
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
        /*
        |----------------------------------------------------------------
        |   If there are no posts to display, display the no-posts div.
        |----------------------------------------------------------------
        */
        get_template_part('includes/template-files/no-posts');
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
get_template_part('includes/template-files/link-block');


get_footer();
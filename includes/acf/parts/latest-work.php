<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/25/2015
 * Time:        12:06 AM
 *
 * @package Media Critics
 */
?>

<div id="work" class="container-fluid no-padding">

    <?php
    $x = 1;
    $current_post = get_the_ID();
    $args = array(
        'post__not_in' => array($current_post),
        'post_type' => 'portfolio',
        'posts_per_page' => 2,
    );

    $the_query = new WP_Query($args);
    /*
    |----------------------------------------------------------------
    |   Check if the query returns any posts, if true render the
    |   posts. If false return a warning for the user.
    |----------------------------------------------------------------
    */
    if($the_query->have_posts()) {

        while ($the_query->have_posts()) : $the_query->the_post();

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
            $x++;

        endwhile;
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
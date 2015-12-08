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
<div class="container-fluid container-capped">
    <span class="headline">
        <h2 class="no-margin"><?php the_field('title_text'); ?></h2>
        <hr/>
    </span>
     <span class="subline">
        <hr/>
        <h3><?php the_field('subtitle_text'); ?></h3>
    </span>

    <div class="text">
        <p><?php the_field('content_text'); ?></p>
    </div>
</div>

<div id="page-work" class="container-fluid no-padding">
    <?php
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

        while ($the_query->have_posts()) : $the_query->the_post();

            switch(get_field('sort')):

                case 'normal':
                    get_template_part('includes/template-files/work-block');
                    break;
                case 'featured':
                    get_template_part('includes/template-files/work-block-featured');
                    break;

            endswitch;

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

<?php
/*
|-----------------------------------------------------------------------------------------------------------------------
|   Link block.
|-----------------------------------------------------------------------------------------------------------------------
*/
get_template_part('includes/template-files/link-block');


get_footer();
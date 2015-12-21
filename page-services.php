<?php
/* Template Name: Diensten Template */

/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        12/17/2015
 * Time:        9:22 AM
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
|   Services menu.
|-----------------------------------------------------------------------------------------------------------------------
*/
?>
<div id="services-menu" class="container-fluid no-padding">
    <?php
    /*
    |----------------------------------------------------------------
    |   Get the current page ID.
    |----------------------------------------------------------------
    */
    $current_page_id = get_the_ID();

    /*
    |----------------------------------------------------------------
    |   Get only the pages that have the page-services template.
    |----------------------------------------------------------------
    */
    $args = array(
        'post_type' => 'page',
        'orderby' => 'date',
        'order'   => 'ASC',
        'meta_query' => array(
            array(
                'key'   => '_wp_page_template',
                'value' => 'page-services.php'
            )
        )
    );
    $the_query = new WP_Query($args);

    if($the_query->have_posts()){
        while($the_query->have_posts()) : $the_query->the_post();
            /*
            |----------------------------------------------------------------
            |   Get the page ID and check if it is the current page ID.
            |----------------------------------------------------------------
            */
            $page_id = get_the_ID();
            ?>
            <div class="col-md-2 col-sm-2 no-padding <?php if($current_page_id == $page_id){ echo 'active'; } ?>">
                <a href="<?php the_permalink(); ?>" class="button-black">
                    <div class="button-inner">
                        <span class="txt"><?php the_title(); ?></span>
                        <span class="bg"></span>
                    </div>
                </a>
            </div>
            <?php
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
|   Content block.
|-----------------------------------------------------------------------------------------------------------------------
*/
get_template_part('includes/template-files/content-block');

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Link block.
|-----------------------------------------------------------------------------------------------------------------------
*/
get_template_part('includes/template-files/link-block');


get_footer();
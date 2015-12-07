<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/30/2015
 * Time:        9:52 AM
 *
 * @package Media Critics
 */

/*
|----------------------------------------------------------------
|   Get the permalink for the posts previous and next.
|   Check if there are a previous/next post.
|----------------------------------------------------------------
*/
$next_post              = get_next_post();
$next_permalink         = get_permalink($next_post->ID);

$prev_post              = get_previous_post();
$prev_permalink         = get_permalink($prev_post->ID);

$previous_adjacent_post = get_adjacent_post(true, '', true);
$next_adjacent_post     = get_adjacent_post(true, '', false);
?>

<div id="post-menu" class="container-fluid">
    <div class="row">

        <div class="col-md-2">
            <?php
            /*
            |----------------------------------------------------------------
            |   If there is a previous post, show the previous post link.
            |----------------------------------------------------------------
            */
            if($previous_adjacent_post){
                ?>
                    <a href="<?php echo $prev_permalink; ?>"><i class="icon icon-left-open"></i>Vorige</a>
                <?php
            }
            ?>
        </div>

        <div class="col-md-4">
            <a href="<?php echo get_permalink(369); ?>"><i class="icon icon-th"></i>Terug naar overzicht</a>
        </div>

        <div class="col-md-4">
            <a href="<?php the_field('site_link'); ?>" target="_blank">Bekijk website<i class="icon icon-link-2"></i></a>
        </div>

        <div class="col-md-2">
            <?php
            /*
            |----------------------------------------------------------------
            |   If there is a next post, show the next post link.
            |----------------------------------------------------------------
            */
            if($next_adjacent_post){
                ?>
                    <a href="<?php echo $next_permalink; ?>">Volgende<i class="icon icon-right-open"></i></a>
                <?php
            }
            ?>
        </div>

    </div>
</div>
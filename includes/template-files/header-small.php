<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/26/2015
 * Time:        2:34 PM
 *
 * @package Media Critics
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
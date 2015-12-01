<?php
/**
 * Created by PhpStorm.
 * User: Tim van der Slik
 * Project: Media Critics
 * Date: 11/23/2015
 * Time: 1:23 PM
 */
?>

<a href="">
    <div class="go-to-top">
        <i class="icon icon-up-open"></i>
        <span class="bg"></span>
    </div>
</a>

<div id="menu">
    <div class="logo">
        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/logo-menu-media-critics.png' ?>"/></a>
    </div>

    <?php
    $args = array(
        'theme_location'  => 'main-menu',
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '<span class="txt">',
        'link_after'      => '</span><span class="bg"></span>',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
    );

    wp_nav_menu($args);
    ?>
</div>
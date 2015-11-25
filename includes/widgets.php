<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/25/2015
 * Time:        10:19 AM
 *
 * @package Media Critics
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Widgets.
|-----------------------------------------------------------------------------------------------------------------------
*/
register_sidebar(array(
    'name' 			=> __( 'Footer', 'media-critics' ),
    'id' 			=> 'footer',
    'description' 	=> __( 'Footer ruimte', 'media-critics' ),
    'before_widget' => '<div id="%1$s" class="col-md-3 footer-widget %2$s">',
    'after_widget' 	=> '</div>',
    'before_title' 	=> '<h3>',
    'after_title' 	=> '</h3>',
));
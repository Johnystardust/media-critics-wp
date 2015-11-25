<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Media Critics
 * Date:        11/24/2015
 * Time:        12:53 PM
 *
 * @package Media Critics
 */

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Enqueue the scripts and styles.
|-----------------------------------------------------------------------------------------------------------------------
*/
include_once('includes/enqueue.php');

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Remove the main WYSIWYG editor.
|-----------------------------------------------------------------------------------------------------------------------
*/
add_action('init', 'init_remove_support',100);
function init_remove_support(){
    remove_post_type_support( 'page', 'editor');
    remove_post_type_support( 'portfolio', 'editor');
}

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Widgets.
|-----------------------------------------------------------------------------------------------------------------------
*/
include_once('includes/widgets.php');

/*
|-----------------------------------------------------------------------------------------------------------------------
|   Custom Post Types
|-----------------------------------------------------------------------------------------------------------------------
*/
include_once('includes/cpt.php');

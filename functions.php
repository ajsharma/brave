<?php
/**
 * @package WordPress
 * @subpackage clean
 */

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));

//Page navigation style removal
remove_action('wp_print_styles', 'pagenavi_stylesheets');

//image size maximum
$GLOBALS['content_width'] = 600;

/* Disable the Admin Bar. */
show_admin_bar(false);
?>
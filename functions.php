<?php

// INCLUINDO MENU BOOTSTRAP
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
));
//ativar widgets
//nome do widget:mySidebar
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name' => 'Sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h6>',
        'after_title' => '</h6>',
    ));
}
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name' => 'Footer_w1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h6>',
        'after_title' => '</h6>',
    ));
}
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
        'name' => 'Footer_w2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h6>',
        'after_title' => '</h6>',
    ));
}


?>
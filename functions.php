<?php 
//images
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 100, 75, true );
add_image_size( 'home-post-thumbnail', 710, 9999 ); // Permalink thumbnail size

if ( function_exists('register_sidebar') ) 
	register_sidebar(array(
        'before_widget' => '',
        'after_widget' => ''
    ));
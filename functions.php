<?php

// add images theme in front
add_theme_support( 'post-thumbnails' );
// define default size in front-page
set_post_thumbnail_size( 346, 276, true );
// define default size in a single post with word art
add_image_size( 'art', 768, 664, false);

// add title automatically in header of the website
add_theme_support( 'title-tag' );

// declared menu
register_nav_menus( array(
    'main' => 'Menu Principal',
  ) );

function register_assets() {

    // declared style.css on the origin of the theme
    wp_enqueue_style( 
        'style-css',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'register_assets');

// register custom post type to work with
// to create events in Wordpress as Post-type to display on front-page
function lc_create_post_type() {
    // set up labels
    $labels = array (
    'name' => 'Events',
    'singular_name' => 'Event',
    'add_new' => 'Add New Event',
    'add_new_item' => 'Add New Event',
    'edit_item' => 'Edit Event',
    'new_item' => 'New Event',
    'all_items' => 'All Events',
    'view_item' => 'View Event',
    'search_items' => 'Search Events',
    'not_found' => 'No Events Found',
    'not_found_in_trash' => 'No Events found in Trash',
    'parent_item_colon' => '',
    'menu_name' => 'Events',
    );
    //register post type
    register_post_type ( 'event', array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
    'taxonomies' => array( 'post_tag', 'category' ),
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'rewrite' => array( 'slug' => 'events' ),
    )
    );
}
add_action( 'init', 'lc_create_post_type' );
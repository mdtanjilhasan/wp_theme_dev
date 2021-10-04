<?php
// for menu support in dashboard
register_nav_menus([
    'primary-menu' => 'Main Menu'
]);
// add class to anchor tag in menu link
function wp_custom_menu_add_class( $atts, $item, $args ) {
    $class = 'nav-link scrollto'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'wp_custom_menu_add_class', 10, 3 );
// add thumbnail support
add_theme_support('post-thumbnails');
// add theme logo support
add_theme_support('custom-header');
// add sidebar support
register_sidebar([
    'name' => 'Sidebar Location',
    'id' => 'medilab_sidebar',
    'description' => 'sidebar description'
]);
// add custom background support
add_theme_support('custom-background');
// add excerpt / short description support
add_post_type_support('page', 'excerpt');
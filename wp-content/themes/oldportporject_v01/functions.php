<?php

function oldhotel_files(){
  wp_enqueue_style('oldhotel_main_files',
    get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'oldhotel_files');


// CUSTOM LOGO feature
add_theme_support('custom-logo');


// CUSTOM MENU  
add_theme_support('custom-menus');


// CUSTOM Menu
function my_menus(){
  register_nav_menus(array(
    'header-menu' => _('Header navigation'),
    'footer-menu' => _('footer nav'),
    )
  );
}
add_action('init', 'my_menus');



// featured image
function enable_feat_img(){
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'enable_feat_img');

?>
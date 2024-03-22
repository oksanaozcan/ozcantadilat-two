<?php

require_once get_template_directory() . '/inc/bootstrap_5_wp_nav_menu_walker.php';

function ozcantadilattwo_load_scripts()
{
  wp_enqueue_style('ozcantadilattwo-bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all'); 
  wp_enqueue_style('ozcantadilattwo-fontawesome-icons', get_template_directory_uri() . '/assets/fontawesome/css/all.css', array(), '1.0', 'all');  
  wp_enqueue_style('ozcantadilattwo-aos-css', get_template_directory_uri() . '/assets/css/aos.css', array(), '1.0', 'all'); 
  wp_enqueue_style('ozcantadilattwo-style', get_stylesheet_uri(), array(), '1.0', 'all');

  wp_enqueue_script('ozcantadilattwo-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0', true);
  wp_enqueue_script('ozcantadilattwo-aos-js', get_template_directory_uri() . '/assets/js/aos.js', array(), '1.0', true);
  wp_enqueue_script('ozcantadilattwo-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true); 
}
add_action('wp_enqueue_scripts', 'ozcantadilattwo_load_scripts');

register_nav_menus(
  array(
    'ozcantadilattwo_main_menu' => 'Main Menu',
    'ozcantadilattwo_footer_menu' => 'Footer Menu',
  )
);

add_theme_support('custom-logo');
add_theme_support('title-tag');

function turkish_to_latin_permalink( $permalink, $post ) {
  $permalink = strtolower($permalink);
  $permalink = str_replace(
      array('ç', 'ğ', 'ı', 'ö', 'ş', 'ü', 'İ', 'Ç', 'Ğ', 'Ö', 'Ş', 'Ü'),
      array('c', 'g', 'i', 'o', 's', 'u', 'i', 'c', 'g', 'o', 's', 'u'),
      $permalink
  );
  return $permalink;
}
add_filter( 'pre_post_link', 'turkish_to_latin_permalink', 10, 2 );
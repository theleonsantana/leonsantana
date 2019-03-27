<?php

function popper_child_setup() {
  // Prepare theme for translation
  load_child_theme_textdomain ( 'popper-child', get_stylesheet_directory() . '/languages' );
  
  add_image_size ('works-images', 800, 250 );

  
}
add_action( 'after_setup_theme', 'popper_child_setup' );

function override_custom_logo() {
  add_theme_support( 'custom-logo', array(
       'height'      => 220,
       'width'       => 220,
       'flex-height' => true,
       'flex-width'  => true
  ) );
}
add_action( 'after_setup_theme', 'override_custom_logo', 11 );

// Nav enqueue
function popper_child_scripts() {
  // Slick
  wp_register_style( 'Slick_style', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css' );
  wp_enqueue_style('Slick_style');

  wp_register_script( 'Slick', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js', null, null, true );
  wp_enqueue_script('Slick');

  // Font-Awesome Icons
  wp_register_script( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', null, null, true );
  wp_enqueue_script ( 'Font_Awesome' );
  // Nav
  wp_register_script( 'main_navegation', get_stylesheet_directory_uri() . '/js/nav.js', array( 'jquery' ) );
  wp_enqueue_script ( 'main_navegation' );
}
add_action ('wp_enqueue_scripts', 'popper_child_scripts');
 
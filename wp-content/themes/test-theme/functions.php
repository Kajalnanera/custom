<?php

function add_scripts()
{
   wp_register_style('first', get_template_directory_uri() . '/assets/css/style.css');
   wp_enqueue_style( 'first');
   wp_register_style('second', get_template_directory_uri() . '/assets/css/responsive.css');
   wp_enqueue_style( 'second');
   wp_register_style('third', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
   wp_enqueue_style( 'third');
   wp_register_style('forth', get_template_directory_uri() . '/assets/css/bootstrap.css');
   wp_enqueue_style( 'forth');
   wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
   wp_enqueue_style( 'fonts');
   wp_register_style('slider', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
   wp_enqueue_style( 'slider');
   wp_register_style('nice-select', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css');
   wp_enqueue_style( 'nice-select');
   wp_register_script('js-script', get_template_directory_uri() . '/assets/js/jquery-3.7.1.min.js', array ( 'jquery' ));
   wp_enqueue_script( 'js-script');
   wp_register_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'));
   wp_enqueue_script( 'custom-js');
   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array ( 'jquery'));
   wp_enqueue_script( 'bootstrap');
   wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
   wp_enqueue_script( 'popper');
   wp_register_script('slider', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
   wp_enqueue_script( 'slider');
   wp_register_script('nice-select', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js');
   wp_enqueue_script( 'nice-select');
   wp_register_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap');
   wp_enqueue_script( 'google-map');
}
add_action('wp_enqueue_scripts', 'add_scripts');

function my_theme_register_menus() {
   register_nav_menus( array(
       'primary' => __( 'Primary Menu', 'test-theme' ),
       'footer'  => __( 'Footer Menu', 'test-theme' ),
   ) );
}
add_action( 'after_setup_theme', 'my_theme_register_menus' );

add_theme_support( 'menus' );

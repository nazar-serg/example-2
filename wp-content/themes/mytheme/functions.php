<?php

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer', 'scripts_theme' );
add_action( 'after_setup_theme', 'myMenu' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails', array( 'post' ) );
add_theme_support( 'post-thumbnails', array( 'page' ) ); 
add_image_size( 'post_thumb');
add_image_size( 'photo_article', 966, 450, true );
add_image_size( 'photo_article_home', 246, 184, true );

add_filter("the_content", "plugin_myContentFilter");

  function plugin_myContentFilter($content)
  {
    return substr($content, 0, 178);
  }

function myMenu() {
    register_nav_menu( 'top', 'Header Menu' );
}

function style_theme() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'style-main', '/css/main.css' );
    wp_enqueue_style('theme-main', '/scss/main.scss');
}

function scripts_theme() {
    wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/js/index.js' );
}
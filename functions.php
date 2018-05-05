<?php

// Any custom php scripts & customizations

function zer0_setup(){
  add_editor_style();

  add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
  add_theme_support( 'custom-background' );
  add_theme_support( 'nav-menus' );
  add_theme_support( 'title-tag' );
  add_post_type_support( 'page', 'excerpt' );
	register_nav_menus( array( 'menu-main' => __( 'Main Menu', 'zer0' ), ) );

  register_sidebar( array(
    'name' => __( 'Main Sidebar', 'zer0' ),
    'id' => 'sidebar-main',
    'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'zer0' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );
}

add_action( 'after_setup_theme', 'zer0_setup' );

function zer0_styles(){
  wp_enqueue_style( 'zer0', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_print_styles', 'zer0_styles', 10, 1 );

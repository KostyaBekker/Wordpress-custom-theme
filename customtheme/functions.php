<?php
function ct_after_setup_theme () {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );


  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'script',
      'style',
      'navigation-widgets',
    )
  );

}
add_action( 'after_setup_theme', 'ct_after_setup_theme' );



function ct_scripts() {
	wp_enqueue_style( 'ct_style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
  wp_enqueue_style( 'ct_style_additional', get_template_directory_uri() . '/styles/style.css', array(), '1');
  wp_enqueue_script('newscript', get_template_directory_uri() . '/scripts/script.js', [], '123', true);
}
add_action( 'wp_enqueue_scripts', 'ct_scripts' );

<?php
/**
 * Enqueue scripts and styles.
 */
function _djh_scripts() {
  wp_enqueue_style( '_djh-style', get_stylesheet_uri() );


  // wp_enqueue_style( '_djh-fonts', '//fonts.googleapis.com/css?family=Open+Sans:400,700,400italic|Source+Code+Pro|Lobster+Two' );

  // Let's try moving jquery to the footer
  wp_deregister_script( 'jquery' );
  wp_deregister_script( 'jquery-migrate' );
  wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
  wp_register_script( 'jquery-migrate', includes_url( '/js/jquery/jquery-migrate.min.js' ), false, NULL, true );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'jquery-migrate' );

  wp_enqueue_script( '_djh-main', get_template_directory_uri() . '/js/main.min.js', array('jquery'), '', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', '_djh_scripts' );
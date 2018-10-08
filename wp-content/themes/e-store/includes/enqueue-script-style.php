<?php
/**
 * Enqueue scripts and styles.
 */
function estore_scripts() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), null, 'all' );
  wp_enqueue_style( 'fasthover', get_template_directory_uri() . '/assets/css/fasthover.css', array(), null, 'all' );
  wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/assets/css/flexslider.css', array(), null, 'all' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), null, 'all' );
  wp_enqueue_style( 'jquery.countdown', get_template_directory_uri() . '/assets/css/jquery.countdown.css', array(), null, 'all' );
  wp_enqueue_style( 'popuo-box', get_template_directory_uri() . '/assets/css/popuo-box.css', array(), null, 'all' );
  wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:400,400i,700,700i&amp;subset=cyrillic', array(), null, 'all' );
  wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), null, 'all' );
}
add_action( 'wp_enqueue_scripts', 'estore_scripts' );



function estore_styles() {
  wp_enqueue_script( 'jquery-my', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, true );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap-3.1.1.min.js', array('jquery'), null, true );
  wp_enqueue_script( 'easyResponsiveTabs', get_template_directory_uri() . '/assets/js/easyResponsiveTabs.js', array('jquery'), null, true );
  wp_enqueue_script( 'imagezoom', get_template_directory_uri() . '/assets/js/imagezoom.js', array('jquery'), null, true );
  wp_enqueue_script( 'jquery.countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.js', array('jquery'), null, true );
  wp_enqueue_script( 'jquery.flexisel', get_template_directory_uri() . '/assets/js/jquery.flexisel.js', array('jquery'), null, true );
  wp_enqueue_script( 'jquery.flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array('jquery'), null, true );
  wp_enqueue_script( 'jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('jquery'), null, true );
  wp_enqueue_script( 'jquery.wmuSlider', get_template_directory_uri() . '/assets/js/jquery.wmuSlider.js', array('jquery'), null, true );
  wp_enqueue_script( 'minicart', get_template_directory_uri() . '/assets/js/minicart.js', array('jquery'), null, true );
  wp_enqueue_script( 'easyTabs', get_template_directory_uri() . '/assets/js/easyResponsiveTabs.js', array('jquery'), null, true );
  wp_enqueue_script( 'ajax-search', get_template_directory_uri() . '/assets/js/ajax-search.js', array('jquery'), null, true );
  wp_localize_script('ajax-search', 'search_form', array(
    'url' => admin_url('admin-ajax.php'),
    'nonce' => wp_create_nonce('search-nonce'),
  ));
  wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true );
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'estore_styles' );
?>
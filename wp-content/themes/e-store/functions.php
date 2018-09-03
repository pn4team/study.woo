<?php
/**
 * estore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package estore
 */

add_action('after_setup_theme','crb_load');
function crb_load() {
  load_template(get_template_directory() . '/includes/carbon-fields/vendor/autoload.php');
  \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields','ast_register_custom_fields');
function ast_register_custom_fields() {
  require get_template_directory() . '/includes/custom-fields-options/metabox.php';
  require get_template_directory() . '/includes/custom-fields-options/theme-options.php';
}

/*
Подключение настроек темы и виджетов
*/
require get_template_directory() . '/includes/theme-settings.php';
require get_template_directory() . '/includes/widget-areas.php';
require get_template_directory() . '/includes/enqueue-script-style.php';
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function estore_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'estore' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'estore' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'estore_widgets_init' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
}

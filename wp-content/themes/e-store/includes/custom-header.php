<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package estore
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses estore_header_style()
 */
function estore_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'estore_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'estore_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'estore_custom_header_setup' );

if ( ! function_exists( 'estore_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see estore_custom_header_setup().
	 */
	function estore_header_style() {
		$header_text_color = get_header_textcolor();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
			?>
			.site-title,
			.site-description {
				position: absolute;
				clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
		// If the user has set a custom color for the text use that.
		else :
			?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;

add_action('header_parts', 'estore_header_modal', 10);
function estore_header_modal () {
  get_template_part('template-parts/header/modal-login');
}

add_action('header_parts', 'estore_container_start', 15);
function estore_container_start () {
  ?><div class="container"><?php
}

add_action('header_parts', 'estore_header_icon_login', 20);
function estore_header_icon_login () {
  get_template_part('template-parts/header/login-icon');
}
 
add_action('header_parts', 'estore_header_logon', 30);
function estore_header_logon () {
  get_template_part('template-parts/header/logo');
}
 
add_action('header_parts', 'estore_header_search', 40);
function estore_header_search () {
  get_template_part('template-parts/header/search');
}
 
add_action('header_parts', 'estore_header_card', 50);
function estore_header_card () {
  get_template_part('template-parts/header/mini-card');
}

add_action('header_parts', 'estore_container_end', 55);
function estore_container_end () {
  ?></div><?php
}
 
add_action('header_parts', 'estore_header_navi', 60);
function estore_header_navi () {
  get_template_part('template-parts/header/navi');
}
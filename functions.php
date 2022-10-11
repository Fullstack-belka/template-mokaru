<?php
/**
 * Mokaru functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mokaru
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mokaru_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Mokaru, use a find and replace
		* to change 'mokaru' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'mokaru', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'mokaru' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'mokaru_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	// Set up the Woocomerce.
	add_theme_support('woocommerce');

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'mokaru_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mokaru_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mokaru_content_width', 640 );
}
add_action( 'after_setup_theme', 'mokaru_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mokaru_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'mokaru' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'mokaru' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'mokaru_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mokaru_scripts() {
	wp_enqueue_style( 'mokaru-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'mokaru-style', 'rtl', 'replace' );

	wp_enqueue_script( 'mokaru-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mokaru_scripts' );

// Incluir Bootstrap JS
function bootstrap_js() {
	wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/assets/bootstrap.min.js', array('jquery'), '', true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');
// Incluir Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/assets/bootstrap.min.css', array(), ''); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');
// Incluir Bootstrap CSS
function custom_css() {
	wp_enqueue_style( 'custom_css', 	get_stylesheet_directory_uri() . '/assets/custom.css', 	array(), ''); 
	wp_enqueue_script( 'custom_js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), '', true); 

	if(is_user_logged_in()){
		wp_enqueue_style( 'dashboard_css', get_stylesheet_directory_uri() .  '/assets/dashboard/dashboard.css',array(), '' );
		wp_enqueue_script( 'dashboard_js', get_stylesheet_directory_uri() . '/assets/dashboard/dashboard.js', array('jquery'), '', true); 
	}
	if ( is_page_template( 'templates/template-login.php' ) ) {
		wp_enqueue_script( 'jqvalidate', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js', array('jquery'), '', true); 
		wp_enqueue_script( 'jqadm', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js', array('jquery'), '', true); 
		wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/login/login.css',array(), '' );
		wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/login/login.js', array('jquery'), '', true); 

	}
	if ( is_page_template( 'templates/template-checkout-membresia.php' ) ) {
		wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/checkout/checkout.css',array(), '' );
		wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/checkout/checkout.js', array('jquery'), '', true); 
	}
	if ( is_page_template( 'templates/template-mi-cuenta.php' ) ) {
		wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/account/account.css',array(), '' );
		wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/account/account.js', array('jquery'), '', true); 
	}
	if ( is_page_template( 'templates/template-activa-tu-cuenta.php' ) ) {	
		
		wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/activa_cuenta/activa_cuenta.css',array(), '' );
		wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/activa_cuenta/activa_cuenta.js', array('jquery'), '', true); 
	}
	if ( is_page_template( 'templates/template-login.php' ) ) {
		wp_enqueue_style( 'login_css', get_stylesheet_directory_uri() .  '/assets/login.css',array(), '' );
	}

}
add_action( 'wp_enqueue_scripts', 'custom_css');


function pmpro_add_fields_to_checkout() {
	// This is where our fields code will go.
	// Don't break if Register Helper is not loaded
	if ( ! function_exists( 'pmprorh_add_registration_field' ) ) {
		return false;
	}
	// This is where our fields code will go.

	$fields = array();
	$fields[] = new PMProRH_Field(
		'comprobante',					// input name, will also be used as meta key
		'file',						// type of field
			array(
				'label'		=> 'Comprobante de tu transaccion',		// custom field label
				'profile'	=> true,		// show in user profile
				'accept'	=> '.jpg,.png,.jpeg',		// show in user profile
				'class'	=> 'file input_frm_hidden',	// class
				'required'	=> true,		// make this field required				
			)
		);

	$fields[] = new PMProRH_Field(
		'TYC',					// input name, will also be used as meta key
		'checkbox',						// type of field
		array(
			'label'		=> 'Acepto los <a href="/terminos-y-condiciones" target="_blank">Terminos y condiciones de Mokaru</a>',	// custom field label
			'profile'	=> true,	// show in user profile
			'class'	=> 'tyc',	// class
			'required'	=> true,	// make this field required
		)
	);

	foreach($fields as $field){
		pmprorh_add_registration_field(
			'checkout_boxes',	// location on checkout page
			$field	// PMProRH_Field object
		);
	}

 }
 add_action( 'init', 'pmpro_add_fields_to_checkout' );


 // ADD CHECKBOX FIEL PARA CHECKOUT
 // checkbox field
add_action( 'woocommerce_after_order_notes', 'quadlayers_subscribe_checkout' );

// Removes Order Notes Title

add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );

remove_action( 'woocommerce_order_details_after_order_table', 'woocommerce_order_again_button' );

// Remove Order Notes Field
add_filter( 'woocommerce_checkout_fields' , 'hide_addiotional_info_checkout' );

function hide_addiotional_info_checkout( $fields ) {
	unset($fields['order']['order_comments']);
	return $fields;
}

// Remove notification add to cart
add_filter( 'wc_add_to_cart_message_html', '__return_false' );


function quadlayers_subscribe_checkout( $checkout ) {
woocommerce_form_field( 'subscriber', array(
'type' => 'checkbox',
//'required' => true,
'class' => array('custom-field form-row-wide'),
'label' => ' Subscribe to our newsletter.'
), $checkout->get_value( 'subscriber' ) );
}

 // OCULTAR BARRA DE ADMINISTRACION PARA USUARIOS QUE NO SON ADMINISTRADORES

 add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	show_admin_bar(false);
	}
}



// CRON UPDATE MEMBRESIAS
add_action( 'mokaru_services', 'update_membership_interest' );

function update_membership_interest() {
	mokaru_update_interest();
}

function clean_date($date) {

	$dateUTC = new DateTime($date);
	$dateUTC->setTimezone(new DateTimeZone('America/Bogota'));
	//$string = date("d M - h:i A", strtotime( $date));
	$string = $dateUTC->format('d M - h:i A');
	return $string;
}


function get_color_membership( $id_member = null ){
	$color = '#5640E6';

	if($id_member == 1){
		$color = '#C4A655';
	}
	if($id_member== 2){
		$color = '#3C4B5F';
	}
	if($id_member == 3){
		$color = '#020119';
	}
	return $color;
}

function member_plan() {

	global $current_user;
	global $member;
	$member = [ 
		'status' => 'inactive',
		'level' => new stdClass(),
		'total' => '0',
		'code' => '0'
	];	
	$member['level']->name = '';
	$member['level']->initial_payment  = '0';
	$member['level']->color = get_color_membership();

	// NO ACTIVAR ESTA FUNCION - SOLO PARA PRUEBA
	//mokaru_update_interest();

	if(is_user_logged_in())
	{				
		$user_id = $current_user->ID;
		$user = mokaru_get_user($current_user->ID);
		if($user){
			$member['code'] = $user->code ;
			$member['total'] =  $user->amount;
			$member['status'] = $user->status;
		}
	}

	if(function_exists('pmpro_hasMembershipLevel') && pmpro_hasMembershipLevel())
	{				
		$user_id = $current_user->ID;
		$user = mokaru_get_user($current_user->ID);
		$level = pmpro_getMembershipLevelForUser( $user_id );
		$level_id = $level->id;
		$membership = $current_user->membership_level;

		$member['code'] = $user->code ;
		$member['level'] = $level;
		$member['level']->name = strtolower($membership->name);			
		$member['level']->color = get_color_membership($member['level']->id);
		$member['total'] =  $user->amount;
		$member['status'] = $user->status;
	}
}

! is_admin() and add_action( 'init', 'member_plan' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


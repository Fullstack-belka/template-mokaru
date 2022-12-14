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

use Mailjet\Resources;

/**
 * Implement the Custom Header feature.
 */



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
	

	require get_template_directory() . '/inc/Updater.php';

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
function custom_scripts() {
	wp_enqueue_style( 'custom_css', 	get_stylesheet_directory_uri() . '/assets/custom.css', 	array(), ''); 
	wp_enqueue_script( 'custom_js', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), '', true); 

	if ( is_page_template( 'templates/template-checkout.php' ) ) {
		wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/checkout/checkout.css',array(), '' );
		wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/checkout/checkout.js', array('jquery'), '', true); 
	}
	if ( is_page_template( 'templates/template-activa-tu-cuenta.php' ) ) {			
		wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/activa_cuenta/activa_cuenta.css',array(), '' );
		wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/activa_cuenta/activa_cuenta.js', array('jquery'), '', true); 
	}

}
add_action( 'wp_enqueue_scripts', 'custom_scripts');

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

//A??ADIR AL CARRITO CON AJAX
add_action('wp_ajax_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
add_action('wp_ajax_nopriv_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
        
function woocommerce_ajax_add_to_cart() {
	
	global $woocommerce;
	// VACIAMOS EL CARRITO
	$woocommerce->cart->empty_cart();

	$product_id = apply_filters('woocommerce_add_to_cart_product_id', absint($_POST['product_id']));
	$quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
	$variation_id = absint($_POST['variation_id']);
	$passed_validation = apply_filters('woocommerce_add_to_cart_validation', true, $product_id, $quantity);
	$product_status = get_post_status($product_id);

	if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity, $variation_id) && 'publish' === $product_status) {

		do_action('woocommerce_ajax_added_to_cart', $product_id);

		if ('yes' === get_option('woocommerce_cart_redirect_after_add')) {
			wc_add_to_cart_message(array($product_id => $quantity), true);
		}

		WC_AJAX :: get_refreshed_fragments();
	} else {

		$data = array(
			'error' => true,
			'product_url' => apply_filters('woocommerce_cart_redirect_after_error', get_permalink($product_id), $product_id));

		echo wp_send_json($data);
	}

	wp_die();
}

// A??ADIR POSTAL OBLIGATORIO
// Make Postal Code Required for all Countries
add_filter('woocommerce_get_country_locale', function($locales){
    foreach ($locales as $key => $value) {
        $locales[$key]['postcode']['required'] = true;
    }
    return $locales;
});

// OBTENER ULTIMA ORDEN Y VERIFICAR ESTADOS
function mokaru_verify_order($user_id){

	// Get the WC_Customer instance Object for the current user
	$customer = new WC_Customer( $user_id );
	$last_order = $customer->get_last_order(); // OBTENEMOS LA ULTIMA ORDEN
	$order_status = false;
	$show = false;

	if(!empty($last_order)){
		$order_status = $last_order->get_status(); // OBTENEMOS EL ESTADO DE LA ORDEN
	}
	// SI LA ULTIMA ORDEN ESTA EXISTE MUESTRA QUE YA TIENE
	if($order_status){
		$show = true;
		// SI LA ULTIMA ORDEN ESTA CANCELADA PERMITE LA COMPRA
		if( $order_status == 'cancelled' ){
			$show = false;
		}
	}
	$verify = new stdClass();
	$verify->show = $show; 
	$verify->order_status = $order_status; 

	return $verify;
}

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


add_action( 'wp_ajax_nopriv_create_request','ajax_create_request' );
add_action( 'wp_ajax_create_request','ajax_create_request');

function ajax_create_request() {
	global $current_user;
    $nonce = sanitize_text_field( $_POST['nonce'] );
    $statusCode = 0;
    $msg = '';
    if ( ! wp_verify_nonce( $nonce, 'ajax-request-nonce' ) ) {
        die ( 'Busted!');
    }
	$memberClass = new Member();
	$member = $memberClass->get_member( $current_user->ID);

    if(empty($_POST['usdt']) || $_POST['usdt'] < 50){ $statusCode = 1; $msg .= '<br>Ingrese un monto valido'; }
    if($_POST['usdt'] < 50){ $statusCode = 1; $msg .= '<br>Igrese un monto mayor a 50 USDT'; }
    if($_POST['usdt'] > $member->amount ){ $statusCode = 1; $msg .= '<br>Igrese un monto menor a '. $member->amount.' USDT'; }
    if(empty($_POST['wallet'])){ $statusCode = 1; $msg .= '<br>Ingrese una Billetera valida'; }

    if($statusCode == 0){

        $text = 'Cantidad a retirar: $'.$_POST['usdt'].' USDT <br>';
        $text .= 'Billetera: '.$_POST['wallet'].'  <br>';
        $type = 'Retiro';
        $status = 'active';

		$arraySend = [
			'text' => $text,
			'type' => $type
		];

		
        $requestClass = new Request();
        $request = $requestClass->create( $current_user->ID ,$type,$status,$text);
		
		$mj = new \Mailjet\Client('a2960d71c926e88e79bab5f18fb0cd62', 'da8add205c6ae3afda0f1dac9d26404f',true,['version' => 'v3.1']);
		$body = [
			'Messages' => [
			  	[
					'From' => [
						'Email' => "moka@mokaru.io",
						'Name' => "Moka"
					],
					'To' => [
						[
							'Email' => "fullstack@belkacompany.com",
							'Name' => "Juan Ramirez"
						]
					],
					'TemplateID' => 4464312,
					'TemplateLanguage' => true,
					'Subject' => "Prueba en servidor - Moka",
					'Variables' => $arraySend
			  	]
			]
		];
		$response = $mj->post(Resources::$Email, ['body' => $body]);
		
		if(!$response->success()){
			$msg .= 'Hubo un error en el envio de correo';
			$msg .= print_r($response->getData());
			$statusCode = 1;
		}
    }

	echo json_encode(
		array( 'statusCode' => $statusCode,'msg' => $msg)
	);

    die();
}


add_action( 'wp_ajax_nopriv_deposit_lines','ajax_deposit_lines' );
add_action( 'wp_ajax_deposit_lines','ajax_deposit_lines');

function ajax_deposit_lines() {
	global $current_user;
    $nonce = sanitize_text_field( $_POST['nonce'] );
    $statusCode = 0;
    $msg = '';
    if ( ! wp_verify_nonce( $nonce, 'ajax-request-nonce' ) ) {
        die ( 'Busted!');
    }
    //LLAMAMOS LAS CLASSES QUE VAMOS A USAR
    $memberClass = new Member();
    $linesClass = new Lines();
    $transactionClass = new MemberTransaction();
	$memberLineClass = new MemberLines();

	$member = $memberClass->get_member( $current_user->ID);

    if(empty($_POST['amount'])){ $statusCode = 1; $msg .= '<br>Ingrese un monto valido'; }
    if($_POST['amount'] < 10 ){ $statusCode = 1; $msg .= '<br>Ingrese un monto mayor a 10 USDT'; }
    if($_POST['amount'] > $member->amount ){ $statusCode = 1; $msg .= '<br>Igrese un monto menor a '. $member->amount.' USDT'; }
    if(empty($_POST['line_to'])){ $statusCode = 1; $msg .= '<br>Seleccione un m??dulo'; }

	// SI PASO LA VALIDACION
    if($statusCode == 0){

        $text = 'Movimiento a ' .$linesClass->get_name_by_id( $_POST['line_to']);
        $type = 'move';
        $status = 'active';

		// SETEAMOS LAS VARIABLES
        $line_from = 1;
        $line_to = $_POST['line_to'];
        $user_id = $current_user->ID;
        $mokaru_account = $memberClass->get_member($user_id);
        $mokaru_id = $mokaru_account->mokaru_id;
		$amount_account =  $mokaru_account->amount - $_POST['amount'];
		$memberClass->update_amount($user_id, $amount_account);

		// $user_id, $mokaru_id, $line_to ,$line_from ,$amount, $type, $text
		$resultTransaction = $transactionClass->add_transaction( $user_id,$mokaru_id,$line_to,$line_from,$_POST['amount'],$type,$text);
		if(!$resultTransaction){
			$statusCode = 1;
			$msg .= 'Hubo un error en la transacci??n';
		}

		// ACTUALIZAMOS EL MONTO DE LA LINEA
		if($statusCode == 0){
			$line_id = $_POST['line_to'];
			$lineMember = $memberLineClass->get_line_member($mokaru_id,$line_id);
			$amount_line = $lineMember->amount_line + $_POST['amount'];
			$resultUpdateLine = $memberLineClass->deposit_to_line($mokaru_id,$line_id,$amount_line);
			if(!$resultUpdateLine){
				$statusCode = 1;
				$msg .= 'Hubo un error en la actualizaci??n del monto de la linea '.$linesClass->get_name_by_id( $_POST['line_to']);
			}
		}
	}

	if($statusCode == 0){{
		$msg .= 'Se realizo la transacci??n correctamente';
	}

    }

	echo json_encode(
		array( 'statusCode' => $statusCode,'msg' => $msg)
	);

    die();
}


<?php
/**
 * Mokaru functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mokaru
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


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

// Incluir Bootstrap CSS
function custom_scripts() {
	wp_enqueue_style( 'bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), ''); 
	wp_enqueue_script( 'bootsrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true); 
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

//AÑADIR AL CARRITO CON AJAX
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

// AÑADIR POSTAL OBLIGATORIO
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
        $requestClass = new Request();
		//create($user_id, $type, $hash ,$req_amount, $wallet, $status, $text )
        $request = $requestClass->create( $current_user->ID ,$type, '', $_POST['usdt'], $_POST['wallet'], $status,$text);

		// ENVIAMOS EMAIL AL USUARIO
		$arraySend = [
			'name' => $current_user->first_name.' '.$current_user->last_name,
			'billetera' => $_POST['wallet'],
			'usdt' => $_POST['usdt'],
		];
		$to_name = $current_user->first_name.' '.$current_user->last_name;
		$to_email = $current_user->user_email; 
		$subject = 'Recibimos tu petición de retiro';
		$templateID = 4487797;
		$response = mailjet_send_email($to_name,$to_email,$subject,$arraySend,$templateID);
		
		if(!$response->success()){
			$msg .= 'Hubo un error en el envio de correo al usuario';
			$msg .= print_r($response->getData());
			$statusCode = 1;
		}

		// ENVIAMOS EMAIL AL ADMIN
		$arraySend = [
			'name' => $current_user->first_name.' '.$current_user->last_name,
			'billetera' => $_POST['wallet'],
			'request_id' => $request,
			'usdt' => $_POST['usdt'],
			'email' =>  $current_user->user_email,
			'celphone' => get_user_meta($current_user->ID,'user_phone',true),
			'user_id' => $current_user->ID,
			'membresia' => $member->level->name,
			'date' => date('Y-m-d'),
		];
		$to_name = 'Administrador';
		$to_email = get_option('admin_email'); 
		$subject = 'Han realizado una petición de retiro';
		$templateID = 4487785;
		$response = mailjet_send_email($to_name,$to_email,$subject,$arraySend,$templateID);

		if(!$response->success()){
			$msg .= 'Hubo un error en el envio de correo al Administrador';
			$msg .= print_r($response->getData());
			$statusCode = 1;
		}
		if($statusCode == 0){
			$msg .= 'Se realizo la solicitud correctamente';
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
	if(empty($_POST['line_to'])){ $statusCode = 1; $msg .= '<br>Seleccione una linea de destino'; }
	if(empty($_POST['line_from'])){ $statusCode = 1; $msg .= '<br>Seleccione una linea de transferencia'; }

	// VALIDACION DEMONTOS
	if($statusCode == 0){
	// SETEAMOS LAS VARIABLES
	$user_id = $current_user->ID;
	$mokaru_account = $memberClass->get_member($user_id);
	$mokaru_id = $mokaru_account->mokaru_id;
	$line_from =  $_POST['line_from'];
	$line_to = $_POST['line_to'];
	$lineMember = $memberLineClass->get_line_member($mokaru_id,$line_from);	
	if($line_from == 1){
		if($_POST['amount'] > $member->amount ){ $statusCode = 1; $msg .= '<br>Igrese un monto menor a '. $member->amount.' USDT'; }
	}else{
		if($_POST['amount'] > $lineMember->amount_line ){ $statusCode = 1; $msg .= '<br>Igrese un monto menor a '. $lineMember->amount_line.' USDT'; }
	}
	}
	// SI PASO LA VALIDACION DE MONTOS
    if($statusCode == 0){

        $text = 'Movimiento a ' .$linesClass->get_name_by_id( $_POST['line_to']);
        $type = 'move';
        $status = 'active';
		$line_id = $line_to;
		// SI LA LINEA QUE RECARGARA ES LA DE TRANSFERENCIAS AJUSTA EL MONTO DE LA BILLETERA
		if($line_to == 1){
			$line_id = $line_from;
		}
		$lineMember = $memberLineClass->get_line_member($mokaru_id,$line_id);				
		// SI VA PA LAS TRANSACCIONES SUMA EL MONTO DE LA CUENTA
		if($line_to == 1){
			$account_amount =  $mokaru_account->amount + $_POST['amount'];
			$amount_line = $lineMember->amount_line - $_POST['amount'];
			$amount_to = $account_amount;
			$amount_from = $amount_line;
		// SI VA PA UN SERVICIO DESCUENTA EL MONTO DE LA CUENTA
		}else{
			$account_amount =  $mokaru_account->amount - $_POST['amount'];
			$amount_line = $lineMember->amount_line + $_POST['amount'];
			$amount_from = $account_amount;
			$amount_to = $amount_line;
		}
		$memberClass->update_amount($user_id, $account_amount);

		// $user_id, $mokaru_id, $line_to ,$line_from ,$amount, $type, $text
		$resultTransaction = $transactionClass->add_transaction( 
			$user_id,$mokaru_id,
			$line_to, $amount_to,
			$line_from, $amount_from,
			$_POST['amount'],$type,$text);

		if(!$resultTransaction){
			$statusCode = 1;
			$msg .= 'Hubo un error en la transacción';
		}
		
		$resultUpdateLine = $memberLineClass->update_amount_to_line($mokaru_id,$line_id,$amount_line);

		if(!$resultUpdateLine){
			$statusCode = 1;
			$msg .= 'Hubo un error en la actualización del monto de la linea '.$linesClass->get_name_by_id( $line_id);
		}
		
	}

	if($statusCode == 0){
		$msg .= 'Se realizo la transacción correctamente';
		// ENVIAMOS EMAIL AL ADMIN
		$name = $current_user->first_name.' '.$current_user->last_name;
		$arraySend = [
			'name' => $name,
			'amount' => $_POST['amount'].' $ USDT',
			'email' =>  $current_user->user_email,
			'celphone' => get_user_meta($current_user->ID,'user_phone',true),
			'user_id' => $current_user->ID,
			'membresia' => $member->level->name,
			'line_to' => $linesClass->get_name_by_id( $line_to),
			'line_from' => $linesClass->get_name_by_id( $line_from),
		];
		$to_email = get_option('admin_email'); 
		$subject = $name.' Ha realizado un movimiento';
		$templateID = 4487786;
		$response = mailjet_send_email($name,$to_email,$subject,$arraySend,$templateID);

		if(!$response->success()){
			$msg .= 'Hubo un error en el envio de correo al Administrador';
			$msg .= print_r($response->getData());
			$statusCode = 1;
		}

	}

	echo json_encode(
		array( 'statusCode' => $statusCode,'msg' => $msg, 'account_amount'=> $account_amount ,  'amount_line'=> $amount_line)
	);

    die();
}



add_action( 'wp_ajax_nopriv_get_line_member','ajax_get_line_member' );
add_action( 'wp_ajax_get_line_member','ajax_get_line_member');

function ajax_get_line_member(){
	global $current_user;
	$memberClass = new Member();
	$lineClass = new Lines($_POST['line_id']);
	$memberLineClass = new MemberLines();

	$nonce = sanitize_text_field( $_POST['nonce'] );
    $statusCode = 0;
    $msg = '';
    if ( ! wp_verify_nonce( $nonce, 'ajax-request-nonce' ) ) {
        die ( 'Busted!');
    }

	$member = $memberClass->get_member( $current_user->ID);
	if($_POST['line_id'] != 1){
		$member_line = $memberLineClass->get_line_member($_POST['mokaru_id'],$_POST['line_id']);
	}else{
		$member_line = $lineClass;
	}
	echo json_encode(
		$member_line 
	);


	die();
}
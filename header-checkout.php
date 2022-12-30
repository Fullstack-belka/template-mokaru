<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mokaru
 */
add_action( 'wp_enqueue_scripts', 'dashboard_scripts');
function dashboard_scripts() {
	wp_enqueue_style( 'dashboard_css', get_stylesheet_directory_uri() .  '/assets/dashboard/dashboard.css',array(), '' );
	wp_enqueue_script( 'dashboard_js', get_stylesheet_directory_uri() . '/assets/dashboard/dashboard.js', array('jquery'), '', true); 
}


global $member;
global $current_user;
$verify = mokaru_verify_order($current_user->ID);

if ( str_contains($_SERVER['REQUEST_URI'], "pedido-realizado") || str_contains($_SERVER['REQUEST_URI'], "pagar") ){
	
}else{
	if($member->status == 'inactive' && $verify->show == 1){ 
		wp_redirect( get_permalink(213) );		
	}
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php

	wp_head();


	foreach( WC()->cart->get_cart() as $cart_item ){
		$product_id = $cart_item['product_id'];
	}

    $order_received = get_query_var('order-received');

	if(!isset($product_id) && isset($order_received )){
		$order = wc_get_order( $order_received );
		foreach ( $order->get_items() as $item_id => $item ) {
			$product_id = $item->get_product_id();
		}
	}

	$level_id = get_post_meta( $product_id, '_membership_product_level', true );
	

	if (isset($level_id)){
		$member = false;
		$membershipAct = new PMPro_Membership_Level( $level_id );
		$membershipAct->classname = strtolower($membershipAct->name);
	}else{	
		wp_redirect( get_permalink(213) );		
	}
	

	$color = get_color_membership($level_id);

	
	?>
	<style>
    :root{
    --main-color-select: <?= $color ?>;
    }
	</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page-dashboard" class="site body-dashboard level_<?=$membershipAct->classname?>">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mokaru' ); ?></a>

    
    <header>
        <div class="nav-mobile">
            <div class="img-container">
                <img class="logo"src="http://mokaru.com.co/wp-content/uploads/2022/07/Recurso-2-1.png" alt="logo">
                <img class="logo-mobile" src="http://mokaru.com.co/wp-content/uploads/2022/07/Recurso-2.png" alt="logo-mobile">
            </div>

            <div class="toggle" id="toggleNavCheckout">
				<img src="http://mokaru.com.co/wp-content/uploads/2022/10/Icon.png" alt="toggle">
            </div>
        </div>

        <div class="user-nav nav_Novisible" id="menuMovilCheckout">
            <div class="user">
                <div class="saludo-user">
					<?php if($current_user->user_firstname){ ?>
						<h4 class="user-nombre"><?= $current_user->user_firstname ?>,</h4>
					<?php }
					
					if (!empty($membershipAct->classname )){ ?>
                    <p class="user-accion">has seleccionado tu cuenta</p>
					<p>Mokaru <?= $membershipAct->classname ?></p>
					<?php }else{ ?>
						<p class="user-accion">Recarga tu cuenta</p>
					<?php } ?>
                </div>
			</div>

			<div class="salir-whrap">
				
				<a class="salir" id="button-atras" href="<?= $_SERVER["HTTP_REFERER"] ?>">
					<svg width="18" height="18" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M25 12.5C25 12.9735 24.8354 13.4276 24.5424 13.7625C24.2494 14.0973 23.852 14.2854 23.4377 14.2854H5.33657L12.0452 21.9483C12.1905 22.1143 12.3057 22.3114 12.3843 22.5282C12.4629 22.7451 12.5034 22.9776 12.5034 23.2124C12.5034 23.4471 12.4629 23.6796 12.3843 23.8965C12.3057 24.1133 12.1905 24.3104 12.0452 24.4764C11.8999 24.6424 11.7275 24.7741 11.5377 24.8639C11.3479 24.9538 11.1445 25 10.9391 25C10.7336 25 10.5302 24.9538 10.3404 24.8639C10.1506 24.7741 9.9782 24.6424 9.83294 24.4764L0.458992 13.7641C0.313498 13.5982 0.198064 13.4012 0.119303 13.1843C0.0405411 12.9674 0 12.7348 0 12.5C0 12.2652 0.0405411 12.0326 0.119303 11.8157C0.198064 11.5988 0.313498 11.4018 0.458992 11.2359L9.83294 0.52359C10.1263 0.188341 10.5242 0 10.9391 0C11.3539 0 11.7518 0.188341 12.0452 0.52359C12.3386 0.858839 12.5034 1.31353 12.5034 1.78765C12.5034 2.26176 12.3386 2.71646 12.0452 3.05171L5.33657 10.7146H23.4377C23.852 10.7146 24.2494 10.9027 24.5424 11.2375C24.8354 11.5724 25 12.0265 25 12.5Z" fill="#FFFFFF"></path>
					</svg>
					<p>Ir atras</p>     
				</a>
			</div>
	</div>

		


    </header>
        
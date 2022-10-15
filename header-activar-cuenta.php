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


if(!is_user_logged_in()) {
    wp_redirect( wp_login_url() );
}

add_action( 'wp_enqueue_scripts', 'dashboard_scripts');
function dashboard_scripts() {
	wp_enqueue_style( 'dashboard_css', get_stylesheet_directory_uri() .  '/assets/dashboard/dashboard.css',array(), '' );
	wp_enqueue_script( 'dashboard_js', get_stylesheet_directory_uri() . '/assets/dashboard/dashboard.js', array('jquery'), '', true); 
}

global $current_user;
global $member;
global $woocommerce;

$woocommerce->cart->empty_cart();
$verify = mokaru_verify_order($current_user->ID);

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php
	wp_head();
	?>
	<style>
    :root{
    --main-color-select: <?= $member->level->color ?>;
    }
	</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page-dashboard" class="site body-dashboard ">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mokaru' ); ?></a>    
    <header>
        <div class="nav-mobile">
            <div class="img-container">
				<img class="logo" id="logoNava" src="http://mokaru.com.co/wp-content/uploads/2022/07/Recurso-2-1.png" alt="logo">
                <img class="logo-mobile" src="http://mokaru.com.co/wp-content/uploads/2022/07/Recurso-2.png" alt="logo-mobile">
            </div>

            <div class="toggle" id="toggleNav">
                <img src="http://mokaru.com.co/wp-content/uploads/2022/10/Icon.png" alt="toggle">
            </div>
        </div>

        <div class="user-nav nav_Novisible" id="menuMovil">
            <div class="user">
				<?php if( $member->status == 'inactive' && $verify->show == false ){ ?>   
					<div class="saludo-user">
						<?php if($current_user->user_firstname){ ?>
							<h4 class="user-nombre"><?= $current_user->user_firstname ?>,</h4>
						<?php } ?>
						<p class="user-accion">Selecciona tu Cuenta</p>
					</div>				
					<div class="cuentas">
						<div id="goldAccount" class="nav-rectangulo gold-rec" product-id="23" >
							<div class="mark gold"></div>
							<p class="gold-txt">Mōkaru gold </p>
						</div>
						<div id="platinumAccount" class="nav-rectangulo platinum-rec" product-id="258" >
							<div class="mark platinum"></div>
							<p class="platinum-txt">Mōkaru platinum </p>
						</div>
						<div id="blackAccount" class="nav-rectangulo black-rec" product-id="259" >
							<div class="mark black"></div>
							<p class="black-txt">Mōkaru black </p>
						</div>
					</div>
				<?php }elseif( $member->status == 'active'){ ?>   
					<div class="saludo-user">
						<?php if($current_user->user_firstname){ ?>
							<h4 class="user-nombre"><?= $current_user->user_firstname ?>,</h4>
						<?php } ?>
						<p class="user-accion">Ya eres miembro mokaru!</p>
					</div>
				<?php }else{ ?>
					<div class="saludo-user">
						<?php if($current_user->user_firstname){ ?>
							<h4 class="user-nombre"><?= $current_user->user_firstname ?>,</h4>
						<?php } ?>
						<p class="user-accion">Ya tienes un pedido!</p>
					</div>   
				<?php } ?>
			</div>

			<div class="salir-whrap">
			<a class="salir" href="/dashboard">
				<svg width="18" height="18" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M25 12.5C25 12.9735 24.8354 13.4276 24.5424 13.7625C24.2494 14.0973 23.852 14.2854 23.4377 14.2854H5.33657L12.0452 21.9483C12.1905 22.1143 12.3057 22.3114 12.3843 22.5282C12.4629 22.7451 12.5034 22.9776 12.5034 23.2124C12.5034 23.4471 12.4629 23.6796 12.3843 23.8965C12.3057 24.1133 12.1905 24.3104 12.0452 24.4764C11.8999 24.6424 11.7275 24.7741 11.5377 24.8639C11.3479 24.9538 11.1445 25 10.9391 25C10.7336 25 10.5302 24.9538 10.3404 24.8639C10.1506 24.7741 9.9782 24.6424 9.83294 24.4764L0.458992 13.7641C0.313498 13.5982 0.198064 13.4012 0.119303 13.1843C0.0405411 12.9674 0 12.7348 0 12.5C0 12.2652 0.0405411 12.0326 0.119303 11.8157C0.198064 11.5988 0.313498 11.4018 0.458992 11.2359L9.83294 0.52359C10.1263 0.188341 10.5242 0 10.9391 0C11.3539 0 11.7518 0.188341 12.0452 0.52359C12.3386 0.858839 12.5034 1.31353 12.5034 1.78765C12.5034 2.26176 12.3386 2.71646 12.0452 3.05171L5.33657 10.7146H23.4377C23.852 10.7146 24.2494 10.9027 24.5424 11.2375C24.8354 11.5724 25 12.0265 25 12.5Z" fill="#FFFFFF"></path>
				</svg>                        
				<p>Ir atras</p>     
			</a>
		</div>
		</div>

		


    </header>
        
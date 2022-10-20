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

add_action( 'wp_enqueue_scripts', 'login_script');
function login_script() {
	wp_enqueue_script( 'jqvalidate', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js', false); 
	wp_enqueue_script( 'jqadm', 'https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js', false); 
	wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/login/login.js','', false); 
	wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/login/login.css',array(), '' );
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page-login" class="site body-user">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mokaru' ); ?></a>

	<header >
  
	</header>     
			
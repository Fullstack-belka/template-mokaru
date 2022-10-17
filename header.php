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


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php 

	add_action( 'wp_enqueue_scripts', 'front_script');
	function front_script() {
		wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/front/main.css',array(), '' );
		wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/front/main.js',  true); 
	}

	wp_head();
	?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site"><!-- #page -->
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mokaru' ); ?></a>
	<header>
            <a class="logo" href="/"><img src="http://mokaru.com.co/wp-content/uploads/2022/10/Group-48.png" alt="logo"></a>
            <nav>
                <ul class="nav__links">
                    <li><a href="#">INICIO</a></li>
                    <li><a href="../Nosotros/Nosotros.html">NOSOTROS</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="../Servicios/Servicios.html">SERVICIOS</a></li>
                    <li><a href="#">CONTACTO</a></li>
                </ul>
            </nav>
            <a class="cta" href="/login">Iniciar sesion / Registro</a>
            
            <img class="menu" src="http://mokaru.com.co/wp-content/uploads/2022/10/menu.png" alt="togle">
        </header>  
			

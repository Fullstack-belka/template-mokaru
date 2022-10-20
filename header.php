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

<!--aqui iban las functions pero no estaban funcionando-->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site"><!-- #page -->
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mokaru' ); ?></a>
	<header class="header_front">
            <a class="logo" href="/"><img src="http://mokaru.com.co/wp-content/uploads/2022/10/Group-48.png" alt="logo"></a>
            <nav>
                <ul class="nav__links">
                    <li><a href="/">INICIO</a></li>
                    <li><a href="/nosotros">NOSOTROS</a></li>
                    <li><a href="/ayuda">FAQ</a></li>
                    <li><a href="/servicios">SERVICIOS</a></li>
                    <li><a href="/contacto">CONTACTO</a></li>
                </ul>
            </nav>
            <a class="cta" href="/login">Iniciar sesion / Registro</a>
            
            
                <img class="menu" onClick="openMenu()" id="menu_front" src="http://mokaru.com.co/wp-content/uploads/2022/10/menu.png" alt="togle">

          
        </header>  
        <div class="overlay" id="overlay">
            <button onClick="closeMenu()" class="button_header_togle">

                <p class="close" id="close_front">&times;</p>
            </button>
            <div class="overlay__content">
                <a href="/">INICIO</a>
                <a href="/nosotros">NOSOTROS</a>
                <a href="/ayuda">FAQ</a>
                <a href="/servicios">SERVICIOS</a>
                <a href="/contacto">CONTACTO</a>
               
                <a href="/login" id="ctaMobile">INICIAR SESION / REGISTRO</a>
            </div>
        </div> 
			


        <?php 

add_action( 'wp_enqueue_scripts', 'front_script');
function front_script() {
    wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() .  '/assets/front/main.css',array(), '' );  //hay que llamar al main.js al final de todo el contenido para que funcione
    wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/assets/front/main.js',  true); 
}

wp_head();
?>
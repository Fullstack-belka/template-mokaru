<?php
/**
 * Template Name: Usuarios
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header('login');

?>

<div class="login">
        <div class="logo_container">
            <img src="http://mokaru.com.co/wp-content/uploads/2022/10/newlogoMokaru.png" alt=" logo" class="logo_login">
        </div>


        <div class="ingresa" id="ingresa">
            <div class="buttons">
                <a href="/login/" class="ingresar">Ingresa</a>
                <a href="/crea-tu-cuenta/" class="registrate">Registrate</a>
            </div>    

        <?php the_content(); ?> 


        <div class="linksO">
                <a class="forgot change_form" href="/recuperar-contrasena">¿Olvidaste tu contraseña?</a>
            </div>        
        </div>
    
        
</div>

<img class="fondo" src="http://mokaru.com.co/wp-content/uploads/2022/10/circulos-1.png" alt="Fondo">





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
    <div class="ingresa" id="ingresa">
        <div class="buttons">
            <a href="/login/" class="ingresar">Ingresa</a>
            <a href="/crea-tu-cuenta/" class="registrate">Registrate</a>
        </div>           
        <?php the_content(); ?> 
        <div class="linksO">
            <a class="forgot" href="/recuperar-contrasena">¿Olvidaste tu contraseña?</a>
        </div>        
    </div>

    <div class="text">
        <h1>
            Cuentas donde tus ahorros si generan intereses
        </h1>
        <p>
            Puedes tener uno de los tres tipos de Cuenta Mokaru: 
        </p>
                <ul>
                    <li>Mokaru Gold que te ofrece un 2% mensual.</li>
                    <li>Mokaru Platinum que te genera el 2,5% al mes.</li>
                    <li>Y la mas exclusiva, la Cuenta Black que te brinda un benefico del 3% mes a mes. </li>
                </ul>
        <p class="bottom">
            Disponibilidad exclusiva para 35.000 personas.
        </p>                            
    </div>
</div>     

<?php 
get_footer('login');

?>



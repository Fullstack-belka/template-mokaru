<?php
/**
 * Template Name: Checkout
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header('checkout');

?>

    <div>
        <?php the_content(); ?>
        <div class="info">
            <div class="validacion">Tiempo restante para hacer valida la activación - <span id="clock">  </span> min</div>
            <p><small>¿Por qué tengo tiempo para hacer mi deposito?</small></p>
            <p>El tiempo designado para tu deposito esta ligado a la demanda en la creacion de las cuentas Mokaru, si decides no abrirla o te tardas mas del tiempo proporcionado otra persona en la fila tomara tu lugar y deberas iniciar tu proceso de apertura desde el principio.</p>
        </div>
    </div>

<?php 

get_footer();

?>



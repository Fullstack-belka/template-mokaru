<?php
/**
 * Template Name: Mi cuenta
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<?php
get_header();
?>


<?= do_shortcode('[pmpro_account]') ?>

<div >
    <div class="infoSection">
        <div class="infoText">
            <h1>Configuración</h1>
            <p><strong>Cuenta: </strong> Mokaru Gold</p>
        </div>

        <img src="http://mokaru.com.co/wp-content/uploads/2022/07/Group82.png" alt="Perfil">
    </div>

    <div class="whrap">
        <p class="tituloWhrap"><strong>Informacion Personal:</strong></p>

        <div class="item">
            <p class="itemTitle">Cedula de ciudadania</p>
            <p class="itemR">1000409492</p>
        </div>

        <div class="item">
            <p class="itemTitle">Estado de verificacion:</p>
            <p class="itemTitle">Verificacion Aprovada</p>
        </div>

        <div class="item">
            <p class="itemTitle">Documentos Pendientes</p>
            <p class="itemR">Ver Documentación</p>
        </div>

        <div class="item">
            <p class="itemTitle">Politica de proteccion de datos</p>
            <p class="itemR">Ver Documentación</p>
        </div>

        <div class="item">
            <p class="itemTitle">Terminos y condiciones</p>
            <p class="itemR">Ver Documentación</p>
        </div>

        <button class="cerrar">Cerrar Sesión</button>

    </div>
</div>


<?php 
get_footer();

?>



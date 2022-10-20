<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mokaru
 */

?>

<footer id="colophon" class="site-footer">
	<div class="floor1">
        <div class="linksF">
            <a href="/" class="footerLink">INICIO</a>
            <a href="/nosotros" class="footerLink">NOSTROS</a>
            <a href="/ayuda" class="footerLink">FAQ</a>
            <a href="/servicios" class="footerLink">SERVICIOS</a>
            <a href="/contacto" class="footerLink">CONTACTO</a>
        </div>

        <div class="redesF">
            <a href="#" class="redes">
                <img class="socialIcon" src="http://mokaru.com.co/wp-content/uploads/2022/10/facebook-black.png" alt="FB">
            </a>
            <a href="#" class="redes">
                <img class="socialIcon" src="http://mokaru.com.co/wp-content/uploads/2022/10/twitter-black.png" alt="TW">
            </a>
            <a href="#" class="redes">
                <img class="socialIcon" src="http://mokaru.com.co/wp-content/uploads/2022/10/icons8-instagram-100-1.png" alt="IG">
            </a>
        </div>
    </div>

    <div class="separador"></div>

    <div class="floor2">
        <p>© 2022 Mokaru. All rights reserved.</p>
        <div class="tyc">
            <a href="/terminos-y-condiciones">Terminos de servicio</a>
            <a href="/terminos-y-condiciones">Politica de privacidad</a>
        </div>
    </div>

    <div class="logoF">
        <img src="http://mokaru.com.co/wp-content/uploads/2022/10/Group-48.png" alt="logo" >

    </div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

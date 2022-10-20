<?php
/**
 * Template Name: Contacto
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

<section class="contactSection">
<div class="listaContacto">
<img class="mediaCard" src="http://mokaru.com.co/wp-content/uploads/2022/10/mediaCard.png" alt="tarjeta">
<div class="contactInfo">
<h2>¿Aún tienes dudas?, dejanos ayudarte</h2>

<ul class="listado">
    <li>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" stroke="#3572E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16 8.00011V13.0001C16 13.7958 16.3161 14.5588 16.8787 15.1214C17.4413 15.684 18.2044 16.0001 19 16.0001C19.7957 16.0001 20.5587 15.684 21.1213 15.1214C21.6839 14.5588 22 13.7958 22 13.0001V12.0001C21.9999 9.74314 21.2362 7.55259 19.8333 5.78464C18.4303 4.0167 16.4706 2.77534 14.2726 2.26241C12.0747 1.74948 9.76794 1.99515 7.72736 2.95948C5.68677 3.9238 4.03241 5.55007 3.03327 7.57383C2.03413 9.5976 1.74898 11.8998 2.22418 14.1062C2.69938 16.3126 3.90699 18.2933 5.65064 19.7264C7.39429 21.1594 9.57144 21.9605 11.8281 21.9993C14.0847 22.0381 16.2881 21.3124 18.08 19.9401" stroke="#3572E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg><!--icon-->
        <p>Contacto@mokaru.io</p><!--text-->
    </li>
    <li>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M17 2H7C5.89543 2 5 2.89543 5 4V20C5 21.1046 5.89543 22 7 22H17C18.1046 22 19 21.1046 19 20V4C19 2.89543 18.1046 2 17 2Z" stroke="#3572E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 18H12.01" stroke="#3572E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg><!--icon-->
        <p>+xxx xxx xx xx</p><!--text-->
    </li>
    <li>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" stroke="#3572E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z" stroke="#3572E9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
            <!--icon-->
        <p>Panama</p><!--text-->
    </li>
</ul>

<a href="#" class="wppbtn">Whatsapp</a>
</div>        
</div>

<div class="formulario">

<h2>Escribenos</h2>

<?php echo do_shortcode('[wpforms id="383" title="false"]');?>
</div>
</section>

<img class="bgfaq" src="http://mokaru.com.co/wp-content/uploads/2022/10/circulos.png" alt="Fondo">
<?php 


get_footer();

?>



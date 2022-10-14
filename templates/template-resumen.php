<?php
/**
 * Template Name: Resumen
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<?php
get_header('dashboard');
?>

<div class="grid">
        
    <?php echo do_shortcode( '[woocommerce_cart]' ); ?>

</div>

<?php 


get_footer('dashboard');

?>



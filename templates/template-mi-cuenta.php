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
get_header('account');
?>
<div class="content">


    <div>
        <div class="infoSection">
            <div class="infoText">
                <h1>Configuración</h1>
                <p><strong>Cuenta: </strong> Mokaru Gold</p>
            </div>

            <div class="profile-img-container">
                <figure>					
                    <img src="https://mokaru.com.co/wp-content/themes/mokaru/assets/image/ok_icon.png" alt="Perfil">
                </figure>
            </div>
        </div>

        <div class="whrap noShow" id="miCuenta">
            <p class="tituloWhrap"><strong>Informacion Personal:</strong></p>

            <?php 
                //wc_get_template('/myaccount/my-account.php' ); 
                wc_get_template('/myaccount/my-address.php' ); 
            ?>

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

            <a href="<?php echo wp_logout_url( get_permalink() ); ?>" class="cerrar">Cerrar Sesión</a>

        </div>


        <div class="whrap noShow" id="miMembresia">
 
        </div>
        <div class="whrap noShow" id="facturas">
            <p class="tituloWhrap"><strong>Facturas</strong></p>
            <?php 
            
                if(isset($order_id)){
                    wc_get_template( 'order/order-details.php', array(
                        'order_id' => $order_id
                    ) );
                }else{        
                    $current_page = empty( $current_page ) ? 1 : absint( $current_page );
                    $customer_orders = wc_get_orders( apply_filters( 'woocommerce_my_account_my_orders_query',
                    array( 'customer' => get_current_user_id(),
                    'page' => $current_page,
                    'paginate' => true ) ) );
                    wc_get_template(
                        'myaccount/orders.php', array('current_page' => absint( $current_page ),
                        'customer_orders' => $customer_orders,'has_orders' => 0 < $customer_orders->total, )); 

                }
            ?>    
        </div>


    </div>

</div>

<?php 
get_footer();

?>



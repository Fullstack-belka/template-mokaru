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
<div class="content main_content">


    <div class="">
        <div class="infoSection">
            <div class="infoText">
                <h1>Configuración</h1>
                <p><strong>Cuenta: </strong> Mokaru <?= $member['level']->name ?></p>                
            </div>
            <div class="profile-img-container">
                <figure>					
                    <img src="https://mokaru.com.co/wp-content/themes/mokaru/assets/image/ok_icon.png" alt="Perfil">
                </figure>
            </div>
        </div>

        <?php
            $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            $show_edit = false;
            if (strpos($url,'editar-cuenta') !== false || strpos($url,'direccion/facturacion') !== false) {
                $show_edit = true;
            } 
        ?>
        <div class="whrap noShow" id="miCuenta">

            <div class="account-edit <?= $show_edit == true ? '' : 'noShow' ?>">            
                <?php 
                    if (strpos($url,'editar-cuenta') !== false) {
                        do_action( 'woocommerce_account_content' );
                    } 
                    if (strpos($url,'direccion/facturacion') !== false) {
                        do_action( 'woocommerce_account_content' );
                    } 
                ?>
            </div>


            <div class="account-info <?= $show_edit == true ? 'noShow' : '' ?>">
                <div class="item">
                    <p class="itemTitle">Número de cuenta</p>
                    <p class="itemR code">
					<?php if($member['status'] == 'active'){ ?>    
						<?= $member['code']  ?>
						<?php }else{ ?> Cuenta sin membresía
					<?php } ?>    
				    </p>
                </div>
                <div class="item">
                    <p class="itemTitle">Cedula de ciudadania</p>
                    <p class="itemR"><?= get_the_author_meta( 'document', $current_user->ID ); ?></p>
                </div>

                <div class="item">
                    <p class="itemTitle">Estado de verificacion:</p>
                    <?php
                    $verify = 'Inactiva';

                    if($member['status'] == 'active'){
                        $verify = 'Aprobada';
                    }
                    if($member['status'] == 'pending'){
                        $verify = 'Pendiente';
                    }
                    ?>
                    <p class="itemTitle"><?=$verify?></p>
                </div>
                <?php /*
                <div class="item">
                    <p class="itemTitle">Documentos Pendientes</p>
                    <p class="itemR">Ver Documentación</p>
                </div>
                */ ?>

                <div class="item">
                    <p class="itemTitle">Politica de proteccion de datos</p>
                    <a href="<?= get_permalink(3)?> " class="itemR">Ver Documentación</a>
                </div>

                <div class="item">
                    <p class="itemTitle">Terminos y condiciones</p>
                    <a href="<?= get_permalink(315)?>" class="itemR">Ver Documentación</a>
                </div>

                <div class="buttons">
                    <a href="/mi-cuenta/editar-cuenta/" class="cerrar">Cambiar contraseña</a>
                    <a href="/mi-cuenta/direccion/facturacion/" class="cerrar">Dirección</a>
                    <a href="<?php echo wp_logout_url( get_permalink() ); ?>" class="cerrar">Cerrar Sesión</a>
                </div>
            </div>

        </div>

        <div class="whrap noShow" id="miMembresia">
            <?php
                
                if(empty($member['level']->name) ){
                    $member['level']->name = 'No activa';
                }
            ?>
            <div class="item">
                <p class="itemTitle">Membresia:</p>
                <p class="itemR"><?= $member['level']->name ?></p>
            </div>          
            
            <?php if($member['status'] == 'active'){ ?>    
                <div class="item">
                    <p class="itemTitle">Interes del valor de la membresia:</p>
                    <p class="itemR">18% en 10 meses</p>
                </div>
			<?php } ?>

         
            <?php
            
            /*
            <div class="item">
                <p class="itemTitle">Interes mensual por recargas posteriores:</p>
                <p class="itemTitle">2%</p>
            </div>
            */ ?>

            <div class="item">
                <p class="itemTitle">Monto Actual:</p>
                <p class="itemR"><?= $member['total']?> USDT</p>
            </div>

            <div class="item">
                <p class="itemTitle">Valor de la membresia:</p>
                <p class="itemR"><?= $member['level']->initial_payment ?> USDT</p>
            </div>

            <div class="item">
                <p class="itemTitle">Caducidad:</p>
                <p class="itemR">No</p>
            </div>
        </div>
        <div class="whrap noShow" id="facturas">
            <p class="tituloWhrap"><strong>Facturas</strong></p>
            <?php 
                // SI SELECCIONAN UNA ORDEN MOSTRAR EL CONTENIDO DE ELLA
                $order_id  = absint( get_query_var('view-order') );
                $order = new WC_Order($order_id);
                if($order->get_id() != 0){
                    do_action( 'woocommerce_account_content' );
                }              


                $current_page = empty( $current_page ) ? 1 : absint( $current_page );
                $customer_orders = wc_get_orders( apply_filters( 'woocommerce_my_account_my_orders_query',
                array( 'customer' => get_current_user_id(),
                'page' => $current_page,
                'paginate' => true ) ) );
                wc_get_template(
                    'myaccount/orders.php', array('current_page' => absint( $current_page ),
                    'customer_orders' => $customer_orders,'has_orders' => 0 < $customer_orders->total, )); 
                    
            ?>    
        </div>


    </div>

</div>

<?php 
get_footer('account');

?>



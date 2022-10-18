<?php
/**
 * Template Name: Activa tu cuenta
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header('activar-cuenta');

$checkout_page_id = wc_get_page_id( 'checkout' );
$checkout_page_url = $checkout_page_id ? get_permalink( $checkout_page_id ) : '';
$verify = mokaru_verify_order($current_user->ID);

/*
echo '<pre>';
print_r($last_order );
echo '</pre>';
*/

?>

<section class="activa-tu-cuenta-content">
    <div id="insert">     
            <div id="alert-ajax"></div>
        <?php if( $member->status == 'inactive' && $verify->show == false ){ ?>    
            <div class="bloque bloque-gold" style="display:block;">
                <div class="whrap-gold"> 
                    
                    <h3>Estos son los beneficios que obtendras:</h3>
                    <p>En tu primer deposito de <spam class="gold-txt usdt">350 USDT</spam> para la activacion de tu cuenta <spam class="gold-txt usdt">Mokaru Gold.</spam>
                    <br>Generaras un 16% de interes en los siguientes 10 meses*. <br><br>Los fondos en tu <spam class="enfasis">Cuenta Mokaru Gold</spam> te generaran un <spam class="enfasis">2% de interes mensual.</spam> <br><br>Obtendras <spam class="enfasis">acceso exclusivo al fondo Mokaru</spam>, donde podras: <br> <br><ul><li>Diseñar tu plan de retiro a la medida</li><li>Crear lineas de ahorro <br></li></ul>
                    <br><spam class="txt-pequeño">$0 en costos por el manejo de tu Cuenta Mokaru y sin letras pequeñas, en Mokaru obtienes tu servicio tal como lo que quieres</spam> </p>
                </div>
                <a href="<?=  $checkout_page_url ?>" class="guide-link gold-txt">➝ Continua con tu deposito</a>
            </div>
            <div class="bloque bloque-platinum" style="display:none;"><div class="whrap-platinum"> <h3>Estos son los beneficios que obtendras:</h3><p>En tu primer deposito de <spam class="platinum-txt usdt">500 USDT</spam> para la activacion de tu cuenta <spam class="platinum-txt usdt">Mokaru Platinum.</spam><br>Generaras un 16% de interes en los siguientes 10 meses*. <br><br>Los fondos en tu <spam class="enfasis">Cuenta Mokaru Platinum</spam> te generaran un <spam class="enfasis">2.5% de interes mensual.</spam> <br><br>Obtendras <spam class="enfasis">acceso exclusivo al fondo Mokaru</spam>, donde podras: <br> <br><ul><li>Diseñar tu plan de retiro a la medida</li><li>Crear lineas de ahorro <br></li></ul><br><spam class="txt-pequeño">$0 en costos por el manejo de tu Cuenta Mokaru y sin letras pequeñas, en Mokaru obtienes tu servicio tal como lo que quieres</spam> </p></div>
                <a href="<?=  $checkout_page_url ?>" class="guide-link platinum-txt">➝ Continua con tu deposito</a>
            </div>        
            <div class="bloque bloque-black" style="display:none;"><div class="whrap-black"> <h3>Estos son los beneficios que obtendras:</h3><p>En tu primer deposito de <spam class="black-txt usdt">1,000 USDT</spam> para la activacion de tu cuenta <spam class="black-txt usdt">Mokaru Black.</spam><br>Generaras un 16% de interes en los siguientes 10 meses*. <br><br>Los fondos en tu <spam class="enfasis">Cuenta Mokaru Black</spam> te generaran un <spam class="enfasis">3% de interes mensual.</spam> <br><br>Obtendras <spam class="enfasis">acceso exclusivo al fondo Mokaru</spam>, donde podras: <br> <br><ul><li>Diseñar tu plan de retiro a la medida</li><li>Crear lineas de ahorro <br></li></ul><br><spam class="txt-pequeño">$0 en costos por el manejo de tu Cuenta Mokaru y sin letras pequeñas, en Mokaru obtienes tu servicio tal como lo que quieres</spam> </p></div>
                <a href="<?=  $checkout_page_url ?>" class="guide-link black-txt">➝ Continua con tu deposito</a>
            </div>
            <button class="info-btn" id="open">Ver detalles de mi primer depsito</button>
            <p class="disclamer-txt">
                Nuestros servicios estran disponibles unicamente para  35.000 colombianos, al completarse el 100% de las membresias se cerrara el registro para nuevos clientes y se eliminaran los perfiles de aquellos que no tengan una Cuenta Mokaru activa. <br>
                <br>
                Si no puedes abrir la cuenta que quieres porque se han agotado las plazas selecciona otro tipo de cuenta para recibir los demas beneficios.
            </p>
            <div class="info-adicional noShow" id="infoAdicional">

                <div class="info-header">
                    <img src="http://mokaru.com.co/wp-content/uploads/2022/07/Recurso-3-1.png" class="logo-info" alt="logo">

                    <div class="svg" id="close">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683418 14.0976 1.31658 14.0976 1.70711 13.7071L0.292893 12.2929ZM13.7071 1.70711C14.0976 1.31658 14.0976 0.683418 13.7071 0.292894C13.3166 -0.0976306 12.6834 -0.0976305 12.2929 0.292894L13.7071 1.70711ZM1.70711 0.292893C1.31658 -0.097631 0.683418 -0.0976311 0.292893 0.292893C-0.097631 0.683417 -0.0976311 1.31658 0.292893 1.70711L1.70711 0.292893ZM12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L12.2929 13.7071ZM1.70711 13.7071L13.7071 1.70711L12.2929 0.292894L0.292893 12.2929L1.70711 13.7071ZM0.292893 1.70711L12.2929 13.7071L13.7071 12.2929L1.70711 0.292893L0.292893 1.70711Z" fill="#383838"></path>
                            </svg>
                    </div>
                
                        
                </div>

                <div class="info-whrap">
                    <p>El valor depositado para la activación de tu Cuenta Mokaru estará congelado por los próximos 10 meses generando un 16% de interés fijo; así podrás acceder de a los beneficios del fondo Mokaru: <br><br>

                        </p><ul>
                            <li>
                                Mi retiro 
                                
                            </li>
                            <li>
                                Líneas de Ahorro
                                
                            </li>
                            <li>
                                Cuenta Mokaru (que te generan del 2% al 3% mensual según tu categoría)
                            </li>
                        </ul>
                </div>
                
            </div>
        <?php }elseif( $member->status == 'active' ){ ?>   
            <div class="bloque">
                <div class="whrap">
                    <h2>Ya posees una cuenta Mokaru</h2>
                </div>
            </div>
        <?php }else{ ?>   
            <div class="bloque">
                <div class="whrap">
                    <h2>Tu pedido se encuentra <?=  wc_get_order_status_name( $verify->order_status ); ?> </h2>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<?php 

get_footer();

?>
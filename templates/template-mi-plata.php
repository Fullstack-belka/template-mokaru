<?php
/**
 * Template Name: Mi Plata
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header('dashboard');
$verify = mokaru_verify_order($current_user->ID);

if($member->mokaru_id > 0){
?>

<div class="grid transactions-view">

    <div class="bienvenidos primary-block">
        <div class="bienvenidos-txt">            
            <h3>Bienvenido <?= $current_user->user_firstname ?></h3> <!--Insertar nombre-->
            <p class="bienvenidos-txt-t">Modulo de transacciones </p>
            <p>Aqui podras recargar tus servicios mokaru o retirar tu ganancias</p>
        </div>    
    </div>

    <!--mobile-->
    <div class="bienvenidos-mobile">
        <div class="bienvenidos-mobile-perfil">
            <div class="profile-img-container">
                <figure>					
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/ok_icon.png" alt="Perfil">
                </figure>
            </div>
            <h2 class="saludo-mobile">Hola <br> <?= $current_user->user_firstname ?></h2> <!--insertar nombre-->
        </div>

        <a class="options"  href="/mi-cuenta">
            <svg  width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.5" clip-path="url(#clip0_12_621)">
                <path d="M14.6953 1.64062C14.05 -0.546875 10.95 -0.546875 10.3047 1.64062L10.1484 2.17188C10.052 2.49937 9.88352 2.80112 9.6553 3.05502C9.42708 3.30891 9.14492 3.50851 8.82952 3.63916C8.51412 3.76982 8.17348 3.82822 7.83257 3.81009C7.49166 3.79196 7.15914 3.69775 6.85938 3.53438L6.375 3.26875C4.37031 2.17812 2.17812 4.37031 3.27031 6.37344L3.53438 6.85938C4.23125 8.14062 3.57031 9.73594 2.17188 10.1484L1.64062 10.3047C-0.546875 10.95 -0.546875 14.05 1.64062 14.6953L2.17188 14.8516C2.49937 14.948 2.80112 15.1165 3.05502 15.3447C3.30891 15.5729 3.50851 15.8551 3.63916 16.1705C3.76982 16.4859 3.82822 16.8265 3.81009 17.1674C3.79196 17.5083 3.69775 17.8409 3.53438 18.1406L3.26875 18.625C2.17812 20.6297 4.37031 22.8219 6.37344 21.7297L6.85938 21.4656C7.15914 21.3023 7.49166 21.208 7.83257 21.1899C8.17348 21.1718 8.51412 21.2302 8.82952 21.3608C9.14492 21.4915 9.42708 21.6911 9.6553 21.945C9.88352 22.1989 10.052 22.5006 10.1484 22.8281L10.3047 23.3594C10.95 25.5469 14.05 25.5469 14.6953 23.3594L14.8516 22.8281C14.948 22.5006 15.1165 22.1989 15.3447 21.945C15.5729 21.6911 15.8551 21.4915 16.1705 21.3608C16.4859 21.2302 16.8265 21.1718 17.1674 21.1899C17.5083 21.208 17.8409 21.3023 18.1406 21.4656L18.625 21.7313C20.6297 22.8219 22.8219 20.6297 21.7297 18.6266L21.4656 18.1406C21.3023 17.8409 21.208 17.5083 21.1899 17.1674C21.1718 16.8265 21.2302 16.4859 21.3608 16.1705C21.4915 15.8551 21.6911 15.5729 21.945 15.3447C22.1989 15.1165 22.5006 14.948 22.8281 14.8516L23.3594 14.6953C25.5469 14.05 25.5469 10.95 23.3594 10.3047L22.8281 10.1484C22.5006 10.052 22.1989 9.88352 21.945 9.6553C21.6911 9.42708 21.4915 9.14492 21.3608 8.82952C21.2302 8.51412 21.1718 8.17348 21.1899 7.83257C21.208 7.49166 21.3023 7.15914 21.4656 6.85938L21.7313 6.375C22.8219 4.37031 20.6297 2.17812 18.6266 3.27031L18.1406 3.53438C17.8409 3.69775 17.5083 3.79196 17.1674 3.81009C16.8265 3.82822 16.4859 3.76982 16.1705 3.63916C15.8551 3.50851 15.5729 3.30891 15.3447 3.05502C15.1165 2.80112 14.948 2.49937 14.8516 2.17188L14.6953 1.64062ZM12.5 17.0781C11.2858 17.0781 10.1213 16.5958 9.26278 15.7372C8.40421 14.8787 7.92188 13.7142 7.92188 12.5C7.92188 11.2858 8.40421 10.1213 9.26278 9.26278C10.1213 8.40421 11.2858 7.92188 12.5 7.92188C13.7138 7.92188 14.8778 8.40405 15.7361 9.26232C16.5944 10.1206 17.0766 11.2847 17.0766 12.4984C17.0766 13.7122 16.5944 14.8763 15.7361 15.7346C14.8778 16.5928 13.7138 17.075 12.5 17.075V17.0781Z" fill="#939393"/>
                </g>
                <defs>
                <clipPath id="clip0_12_621">
                <rect width="25" height="25" fill="white"/>
                </clipPath>
                </defs>
                </svg>
        </a>
    </div>

    <div class="Balance balance-block <?= $member->status== 'active' ? 'active' : '' ;  ?>">
        <div class="Balance-txt">
            <h3>Tu Balance</h3>
            <p class="Balance-txt-t"><?= $member->amount;?> $ USDT</p> <!--insertar cantidad de dolares-->
            <?php if($member->status== 'inactive' && $verify->show == false ){ ?>
            <p class="Balance-txt-p">AUN NO TIENES UNA CUENTA MOKARU</p>
            <?php }elseif( $member->status == 'active' ){ ?>  
            <p class="Balance-txt-p">Tu cuenta se encuentra activa</p>
            <?php }else{ ?>  
            <p class="Balance-txt-p">Tu pedido se encuentra <?=  wc_get_order_status_name( $verify->order_status ); ?></p>
            <?php } ?>
        </div>
    </div>

    <div class="Transacciones primary-block">
        <div class="Transacciones-txt">
            <h3>Recargas y Retiros</h3>
            <?php
            $transactionsClass = new MemberTransaction();
            $transactions = $transactionsClass->get_transactions($current_user->ID, 15,1,1);
            ?>

            <?php if(count($transactions)< 1){?>
            <div class="Transacciones-not"> <!--not = notificacion-->
                <div class="circle"><p>?</p></div>
                <p class="mensaje-not">No tienes transacciones</p> <!--Transacciones-->
            </div>
            <?php }else{     ?>
                <div class="transacciones-container">
                    <?php  foreach($transactions as $key => $row){  ?>
                            <div class="transacciones-content <?=$row->type?>"> <!--not = notificacion-->
                                <div class="t-separador">                                    
                                    <div class="circle-<?=$row->type?>">                                    
                                    </div>

                                    <div class="t-content">
                                        <div class="transaccion-txt">
                                            <p class="mensaje-not"><?= $row->text ?></p> <!--Transacciones-->
                                            <p class="fecha"><?= clean_date($row->log_date,'day_h') ?></p>  <!--fecha-->
                                        </div>                                        
                                    </div>
                                </div>    
                                <p class="amount">$ <?= $row->amount ?></p>
                            </div>
                    <?php } ?>
                </div>
            <?php } ?>
            
        </div>
    </div>

    <div class="primary-block" id="trans-action-block">
        <h3>Acciones</h3>
        <div class="button-container">
            <button type="button" class="depositar btn " >Depositar  </button>                
            <button type="button" class="retirar btn" >Retirar  </button>                
        </div>
    </div>

</div>

<div class="depositar-view noShow">
    <div class="grid-retirar">    
        <div class="grid-retirar-titulo">
            <h2>Recargas</h2>
        </div>
        <div class="grid-retirar-info deposit-rectangle primary-block-retiro">     
            <h2 class="titulo-rectangulo">¿Cuanto deseas depositar?</h2>
            <form class="form-retiro" action="/?add-to-cart=424" id="deposit_form">
                <label for="alg_open_price_424">Ingresa un monto</label> 
                <input type="number" data-product_id="424" class="alg_open_price recarga-usdt-retiro" name="alg_open_price" id="alg_open_price_424" value="" pattern="" step="1">
                <button type="submit" name="add-to-cart" value="424" class="single_add_to_cart_button button alt recarga-retiro-btn">Continuar</button>
            </form>  
        </div>

        <div class="grid-recargar-ayuda deposit-rectangle primary-block-retiro">
                <h2 class="titulo-rectangulo">¿DESEAS COMPRAR TUS USDT?</h2>
                <a href="#" class="link-a">Click para comunicarte con nuestro proveedor</a>
        </div>

        <a class="salir">
            <svg width="18" height="18" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M25 12.5C25 12.9735 24.8354 13.4276 24.5424 13.7625C24.2494 14.0973 23.852 14.2854 23.4377 14.2854H5.33657L12.0452 21.9483C12.1905 22.1143 12.3057 22.3114 12.3843 22.5282C12.4629 22.7451 12.5034 22.9776 12.5034 23.2124C12.5034 23.4471 12.4629 23.6796 12.3843 23.8965C12.3057 24.1133 12.1905 24.3104 12.0452 24.4764C11.8999 24.6424 11.7275 24.7741 11.5377 24.8639C11.3479 24.9538 11.1445 25 10.9391 25C10.7336 25 10.5302 24.9538 10.3404 24.8639C10.1506 24.7741 9.9782 24.6424 9.83294 24.4764L0.458992 13.7641C0.313498 13.5982 0.198064 13.4012 0.119303 13.1843C0.0405411 12.9674 0 12.7348 0 12.5C0 12.2652 0.0405411 12.0326 0.119303 11.8157C0.198064 11.5988 0.313498 11.4018 0.458992 11.2359L9.83294 0.52359C10.1263 0.188341 10.5242 0 10.9391 0C11.3539 0 11.7518 0.188341 12.0452 0.52359C12.3386 0.858839 12.5034 1.31353 12.5034 1.78765C12.5034 2.26176 12.3386 2.71646 12.0452 3.05171L5.33657 10.7146H23.4377C23.852 10.7146 24.2494 10.9027 24.5424 11.2375C24.8354 11.5724 25 12.0265 25 12.5Z" fill="#000000"></path>
            </svg>                        
            <p>Ir atras</p>     
        </a>
            
    </div>
</div>

<div class="retirar-view noShow">

                            
    <div class="grid-retirar">



    <div class="grid-retirar-titulo"><h2>Retiros</h2></div>

    <div class="grid-retirar-balance">    
        <div class="Balance-txt-retiro">
            <h3>Tu Balance</h3>
            <p class="Balance-txt-t-retiro"><?= $member->amount;?> $ USDT</p> <!--insertar cantidad de dolares-->                       
        </div>
    </div>

    <div class="grid-retirar-info deposit-rectangle primary-block-retiro "> 
        <h2 class="titulo-rectangulo">¿Cuanto deseas retirar?</h2>
        <form action="" id="form-retiro" class="form-retiro">
            <input type="number" class="recarga-usdt-retiro" name="usdt" id="usdt" placeholder="Cantidad en USDT">        
            <input type="text" class="recarga-usdt-retiro" name="wallet"" id="wallet" placeholder="Billetera de USDT.TRC20 ">        
            <p>Nota: En el apartado de la billetera solo deben ir billeteras de la red TRC20 que reciban USDT</p>
            <input type="submit" value="Continuar" class="recarga-retiro-btn">
            <div class="alert-message"></div>
        </form>
    </div>

    <div class="grid-retirar-ayuda deposit-rectangle primary-block-retiro">


        <h2 class="titulo-rectangulo">¿DESEAS COMPRAR TUS USDT?</h2>
        <a href="#" class="link-a">Click para comunicarte con nuestro proveedor</a>
        <p class="retiro-disclamer">Mokaru no se hace responsable si el usuario agrega una billetera que no sea de USDT.TRC20 o se equivoca en un caracter al momento de agregar la billetera</p>


    </div>

    <div class="salir" id="retirar-back">
        <svg width="18" height="18" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M25 12.5C25 12.9735 24.8354 13.4276 24.5424 13.7625C24.2494 14.0973 23.852 14.2854 23.4377 14.2854H5.33657L12.0452 21.9483C12.1905 22.1143 12.3057 22.3114 12.3843 22.5282C12.4629 22.7451 12.5034 22.9776 12.5034 23.2124C12.5034 23.4471 12.4629 23.6796 12.3843 23.8965C12.3057 24.1133 12.1905 24.3104 12.0452 24.4764C11.8999 24.6424 11.7275 24.7741 11.5377 24.8639C11.3479 24.9538 11.1445 25 10.9391 25C10.7336 25 10.5302 24.9538 10.3404 24.8639C10.1506 24.7741 9.9782 24.6424 9.83294 24.4764L0.458992 13.7641C0.313498 13.5982 0.198064 13.4012 0.119303 13.1843C0.0405411 12.9674 0 12.7348 0 12.5C0 12.2652 0.0405411 12.0326 0.119303 11.8157C0.198064 11.5988 0.313498 11.4018 0.458992 11.2359L9.83294 0.52359C10.1263 0.188341 10.5242 0 10.9391 0C11.3539 0 11.7518 0.188341 12.0452 0.52359C12.3386 0.858839 12.5034 1.31353 12.5034 1.78765C12.5034 2.26176 12.3386 2.71646 12.0452 3.05171L5.33657 10.7146H23.4377C23.852 10.7146 24.2494 10.9027 24.5424 11.2375C24.8354 11.5724 25 12.0265 25 12.5Z" fill="#000000"></path>
        </svg>                        
        <p >Ir atras</p>     
    </div>

    </div>
    
</div>

<?php } ?>


<?php if($member->status == 'inactive' && $verify->show == false){ ?>
 
 <div class="grid">
     <div class="bloque">
         <div class="whrap">
             <h2>Para acceder a este contenido activa tu cuenta</h2>
         </div>
     </div>
     <div class="button">
         <a class="btn-block" href="<?= get_permalink(213) ?>">Activa tu cuenta Mōkaru</a>
     </div>
 </div>
<?php } ?>

<?php 


get_footer('dashboard');

?>



<?php
/**
 * Template Name: Dashboard
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
        
    <div class="Bienvenidos primary-block">
        <div class="Bienvenidos-txt">            
            <h3>Bienvenido <?= $current_user->user_firstname ?></h3> <!--Insertar nombre-->
            <?php /* ?>
            <p class="Bienvenidos-txt-t">Porcentaje Adquirido</p>
            <p class="Bienvenidos-txt-p">+<?= mokaru_get_percentage(1)->percentage ?>%</p>  
            <?php */ ?>          
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
            <h2 class="saludo-mobile">Hola <br>  <?= $current_user->user_firstname ?></h2> <!--insertar nombre-->
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

    <!---->
    <div class="Balance balance-block <?= $member['status'] == 'active' ? 'active' : '' ;  ?>">
        <div class="Balance-txt">
            <h3>Tu Balance</h3>
            <p class="Balance-txt-t"><?= $member['total'];?> $ USDT</p> <!--insertar cantidad de dolares-->
            <?php if($member['status'] == 'inactive'){ ?>
            <p class="Balance-txt-p">AUN NO TIENES UNA CUENTA MOKARU</p>
            <?php } ?>
            <?php if($member['status'] == 'pending'){ ?>
            <p class="Balance-txt-p">Tu cuenta esta en estado de verificación</p>
            <?php } ?>
        </div>
    </div>

    <?php if($member['status'] == 'inactive'){ ?>
    <!--mobile-->
    <a class="btn-block-mobil" href="/activa-tu-cuenta">Activa tu cuenta Mōkaru</a>
    <p class="text-mobil">Para beneficios del 2% al 3% mensual</p>
    <!---->
    <?php } ?>

    <div class="Transacciones primary-block">
        <div class="Transacciones-txt">
            <h3>Transacciones</h3>
            <?php $transactions = mokaru_get_transactions($current_user->ID, 3);?>

            <?php if(count($transactions)< 1){?>
            <div class="Transacciones-not"> <!--not = notificacion-->
                <div class="circle"><p>?</p></div>
                <p class="mensaje-not">No tienes transacciones</p> <!--Transacciones-->
            </div>
            <?php }else{     ?>
                <div class="transacciones-container">
                    <?php  foreach($transactions as $key => $row){  ?>
                            <div class="transacciones-content"> <!--not = notificacion-->
                                <div class="t-separador">                                    
                                    <div class="circle-<?=$row->type == 'income' ? 'green' : 'red' ?>">                                    
                                    </div>

                                    <div class="t-content">
                                        <div class="transaccion-txt">
                                            <p class="mensaje-not"><?= $row->text ?></p> <!--Transacciones-->
                                            <p class="fecha"><?= clean_date($row->log_date) ?></p>  <!--fecha-->
                                        </div>                                        
                                    </div>
                                </div>    
                                <p class="<?=$row->type == 'income' ? 'positivo' : 'negativo' ?>">+$ <?= $row->amount ?></p>
                            </div>
                    <?php } ?>
                </div>
            <?php } ?>
            
        </div>
    </div>

    <div class="Notificaciones primary-block">
        <div class="Notificaciones-txt">
            <h3>Notificaciones</h3>

            
            <?php $notifications = mokaru_get_notifications($current_user->ID, 3);?>

            <?php if(count($notifications)< 1){?>
            <div class="notificacion"> <!--not = notificacion-->
                <div class="circle"><p>?</p></div>
                <p class="mensaje-not">No tienes notificaciones nuevas</p> <!--Notificaciones-->
            </div>
            <?php }else{     ?>
                    <?php  foreach($notifications as $key => $row){  ?>
                            <div class="notificacion"> <!--not = notificacion-->
                                <div class="t-separador">                                    
                                    <div class="circle"><p>?</p></div>
                                    <div class="t-content">
                                        <div class="notificacion-txt">
                                            <p class="mensaje-not"><?= $row->text ?></p> <!--Transacciones-->
                                            <p class="fecha"><?= clean_date($row->log_date) ?></p>  <!--fecha-->
                                        </div>                                        
                                    </div>
                                </div>    
                            </div>
                    <?php } ?>
            <?php } ?>

            <?php if($member['status']  == 'pending'){ ?>
                <div class="notificacion"> <!--not = notificacion-->
                    <div class="t-separador">
                        <div class="icon">
                            
                        </div>                                        
                        <div class="t-content">
                            <div class="notificacion-txt">
                                <p class="mensaje">Esperando revisión de administradores</p> <!--Transacciones-->
                                <p class="fecha">01/07/2022</p>  <!--fecha-->
                            </div>                        
                        </div>
                        
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php if($member['status']  == 'inactive'){ ?>
        <div class="button">
            <a class="btn-block" href="/activemos-tu-cuenta">Activa tu cuenta Mōkaru</a>
        </div>
    <?php } ?>

</div>

<?php 


get_footer('dashboard');

?>



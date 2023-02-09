<?php
/**
 * Template Name: Billetera mokaru
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header('dashboard');
$verify = mokaru_verify_order($current_user->ID);

if($member->mokaru_id > 0){
    $memberClass = new MemberLines();
    $memberLine = $memberClass->get_line_member($member->mokaru_id,3);
    $percentageClass = new Percentage();
    $percentage = $percentageClass->get_percentage($member->level->id+1);

    ?>

    <div class="grid transactions-view">

        <div class="bienvenidos primary-block">
            <div class="bienvenidos-txt">            
                <h3>Mokaru <?= $member->level->name ?> </h3> <!--Insertar nombre-->
                <p class="bienvenidos-txt-t">Modulo Mi Billetera</p>
                <p>Aqui podras recargar tus servicios mokaru o retirar tu ganancias</p>
                <?php 
                    $por = $percentage->percentage * 3000;
                    if( $por == 24.9){
                        $por =  $por / 10;
                    }
                ?>
                <p>Este módulo te brinda un <?= $por ?>% mensual</p>
                <?php /*
                <div class="time">
                    <time class="fecha"><?= clean_date($memberLine->dat_ini,'day_y') ?> - <?= clean_date($memberLine->dat_fin,'day_y') ?></time>  <!--fecha-->
                </div>
                */ ?>
            </div>    
        </div>

        <div class="Balance balance-block <?= $member->status== 'active' ? 'active' : '' ;  ?>">
            <div class="Balance-txt">
                <h3>Tu Balance</h3>
                <p class="Balance-txt-t"> <span class="amount-line"><?= $memberLine->amount_line ?></span> $ USDT</p>
            </div>
        </div>

        <div class="Transacciones primary-block">
            <div class="Transacciones-txt">
                <h3>Transacciones</h3>
                <?php
                $transactionsClass = new MemberTransaction();
                $transactions = $transactionsClass->get_transactions($current_user->ID, 15,3,3);
                ?>

                <?php if(count($transactions)< 1){?>
                <div class="Transacciones-not"> <!--not = notificacion-->
                    <div class="circle"><p>?</p></div>
                    <p class="mensaje-not">No tienes transacciones</p> <!--Transacciones-->
                </div>
                <?php }else{     ?>
                    <div class="transacciones-container">
                        <?php  foreach($transactions as $key => $row){
                                $line = new Lines($row->line_from);  ?>                            
                                <div class="transacciones-content <?=$row->type?>"> <!--not = notificacion-->
                                    <div class="t-separador">                                    
                                        <div class="circle-<?=$row->type?>">                                    
                                        </div>

                                        <div class="t-content">
                                            <div class="transaccion-txt">
                                                <p class="mensaje-not"><?= $row->text ?></p> <!--Transacciones-->
                                                <p class="fecha"><?= clean_date($row->log_date,'day_h') ?></p>  <!--fecha-->
                                                <p class="line"><?= $line->name ?></p>  
                                            </div>                                        
                                        </div>
                                    </div>    
                                    <p class="amount ">$ <?= $row->amount ?></p>
                                </div>
                        <?php } ?>
                    </div>
                <?php } ?>
                
            </div>
        </div>

        <div class="primary-block">
            <h3>Intereses generados</h3>
                <div class="line">
                    <div class="container-row interest">
                        <div class="val">
                            $ <?= $memberLine->interest ?>
                        </div>
                        <div class="text">Intereses hasta la fecha</div>
                    </div>
                    <div class="container-row actions">
                        <a href="<?= get_admin_url(get_current_blog_id(), 'admin.php?page=mokaru-users&template=view&user_id='.$_REQUEST['user_id'].'&line_id='.$memberLine->line_id);?>"><i class="fa-regular fa-eye"></i></a>                                         
                    </div>
                </div>
        </div>

        <div class="primary-block" id="trans-action-block">
            <h3>Acciones</h3>
            <div class="button-container">
                <button type="button" class="depositar-servicios btn" data-line-from-id="1" data-line-to-id="3">Depositar  </button>                
                <button type="button" class="retirar btn depositar-servicios" data-line-from-id="3" data-line-to-id="1">Retirar  </button>                
            </div>

        </div>

    </div>

    <?php 
    // INCLUIMOS LA VISTA DE RECARGAR MODULO
    require get_template_directory() . '/template-parts/depositar-view.php';
        
    ?>

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



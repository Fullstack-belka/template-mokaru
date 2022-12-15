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
            <p>Este módulo te brinda un <?= $percentage->percentage *3000 ?>% mensual</p>

            <div class="time">
                <time class="fecha"><?= clean_date($memberLine->dat_ini,'day_y') ?> - <?= clean_date($memberLine->dat_fin,'day_y') ?></time>  <!--fecha-->
            </div>
        </div>    
    </div>

    <div class="Balance balance-block <?= $member->status== 'active' ? 'active' : '' ;  ?>">
        <div class="Balance-txt">
            <h3>Tu Balance</h3>
            <p class="Balance-txt-t"><?= $memberLine->amount_line;?> $ USDT</p>
        </div>
    </div>

    <div class="Transacciones primary-block">
        <div class="Transacciones-txt">
            <h3>Transacciones</h3>
            <?php
            $transactionsClass = new MemberTransaction();
            $transactions = $transactionsClass->get_transactions($current_user->ID, 15,3);
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
                    <a href="<?= get_admin_url(get_current_blog_id(), 'admin.php?page=mokaru-profile&template=view&user_id='.$_REQUEST['user_id'].'&line_id='.$memberLine->line_id);?>"><i class="fa-regular fa-eye"></i></a>                                         
                </div>
            </div>
    </div>

    <div class="primary-block" id="trans-action-block">
        <h3>Acciones</h3>
        <div class="button-container">
            <button type="button" class="depositar btn " data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Depositar  </button>                
            <button type="button" class="retirar btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Retirar  </button>                
        </div>

    </div>


</div>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Deposita a tu cuenta Mokaru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5">
         <form class="cart" action="/?add-to-cart=424" id="deposit_form">
		    <label for="alg_open_price_424">Ingresa un monto</label> 
            <input type="number" data-product_id="424" class="alg_open_price text" style="width:75px;text-align:center;" name="alg_open_price" id="alg_open_price_424" value="" pattern="" step="1"> <span class="popfwc-currency-symbol">$</span>
		    <button type="submit" name="add-to-cart" value="424" class="single_add_to_cart_button button alt">Añadir al carrito</button>
	    </form>            
      </div>
    </div>
  </div>
</div>


<?php 


get_footer('dashboard');

?>



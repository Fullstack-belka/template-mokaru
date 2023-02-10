<?php

$memberClass = new MemberLines();
$memberLine = $memberClass->get_line_member($member->mokaru_id,3);

?>
<div class="depositarModulo-view noShow">
    <div class="grid-retirar">    
        <div class="grid-retirar-titulo">
            <h2>Depositar a <span class="name-line">Modulo</span></h2>
        </div>
        <div class="grid-retirar-info deposit-rectangle primary-block-retiro">     
            <h2 class="titulo-rectangulo">Información de Deposito</h2>
            <p class="text-center">Vas a depositar a: <span class="name-line">Modulo</span></p>
            <form class="form-recargar-modulo" action="/" id="form-recargar-modulo">
                <input type="number" class="recarga-usdt-retiro clean_number" id="amount" name="amount" placeholder="Cantidad en USD" pattern="" step="1">
                <input type="hidden" id="line_to" name="line_to" value="3" >
                <input type="hidden" id="line_from" name="line_from" value="1" >
                <button type="submit" class="button alt recarga-retiro-btn">Depositar</button>
                <div class="alert-message"></div>
            </form>  
        </div>

        <div class="grid-retirar-balance-t">
            <div class="Balance-txt-retiro">
                <h3>Tu cuenta</h3>
                <p class="Balance-txt-t-retiro"><span class="amount-member"><?= $member->amount?></span> $ USDT</p> <!--insertar cantidad de dolares-->                       
            </div>
            <div class="Balance-txt-retiro">
                <h3>Monto en Mi Billetera</h3>
                <p class="Balance-txt-t-retiro"><span class="amount-line"><?= $memberLine->amount_line ?></span> $ USDT</p> <!--insertar cantidad de dolares-->                       
            </div>
        </div>

        <a class="salir">
            <svg width="18" height="18" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M25 12.5C25 12.9735 24.8354 13.4276 24.5424 13.7625C24.2494 14.0973 23.852 14.2854 23.4377 14.2854H5.33657L12.0452 21.9483C12.1905 22.1143 12.3057 22.3114 12.3843 22.5282C12.4629 22.7451 12.5034 22.9776 12.5034 23.2124C12.5034 23.4471 12.4629 23.6796 12.3843 23.8965C12.3057 24.1133 12.1905 24.3104 12.0452 24.4764C11.8999 24.6424 11.7275 24.7741 11.5377 24.8639C11.3479 24.9538 11.1445 25 10.9391 25C10.7336 25 10.5302 24.9538 10.3404 24.8639C10.1506 24.7741 9.9782 24.6424 9.83294 24.4764L0.458992 13.7641C0.313498 13.5982 0.198064 13.4012 0.119303 13.1843C0.0405411 12.9674 0 12.7348 0 12.5C0 12.2652 0.0405411 12.0326 0.119303 11.8157C0.198064 11.5988 0.313498 11.4018 0.458992 11.2359L9.83294 0.52359C10.1263 0.188341 10.5242 0 10.9391 0C11.3539 0 11.7518 0.188341 12.0452 0.52359C12.3386 0.858839 12.5034 1.31353 12.5034 1.78765C12.5034 2.26176 12.3386 2.71646 12.0452 3.05171L5.33657 10.7146H23.4377C23.852 10.7146 24.2494 10.9027 24.5424 11.2375C24.8354 11.5724 25 12.0265 25 12.5Z" fill="#000000"></path>
            </svg>                        
            <p>Ir atras</p>     
        </a> 
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="alertModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body ">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <figure id="deposit_icon" class="content-image alert-icon">
            <lottie-player id="" src="https://assets3.lottiefiles.com/packages/lf20_qxemgrnw.json" autoplay loop class="m-auto "  background="transparent"  speed="1"  style="width: 150px; height: 150px;"></lottie-player>
        </figure>
        <figure id="alert_icon" style="display:none" class="content-image alert-icon">
            <lottie-player id="" src="https://assets8.lottiefiles.com/packages/lf20_p7ki6kij.json" autoplay loop class="m-auto "  background="transparent"  speed="1"  style="width: 150px; height: 150px;"></lottie-player>
        </figure>
        <figure id="success_icon" style="display:none" class="content-image alert-icon">
            <lottie-player id="" src="https://assets8.lottiefiles.com/packages/lf20_dyy9le6w.json" autoplay loop class="m-auto "  background="transparent" speed=".3"  style="width: 150px; height: 150px;"></lottie-player>
        </figure>
            <div class="text-center message">

            </div>
            <div class="initial-message">
                <p class="text-center">Estas seguro que deseas depositar <span class="amount-send">0</span> $ USDT a <span class="name-line">Billetera</span></p>
            </div>
      </div>
      <div class="modal-footer border-top-0 justify-content-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, ir atras</button>
        <button type="button" id="button_send" form="form-recargar-modulo" data-bs-dismiss="modal" class="btn btn-primary">Si, estoy seguro</button>
      </div>
    </div>
  </div>
</div>





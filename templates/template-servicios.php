<?php
/**
 * Template Name: Servicios
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


<section class="baner_services">

<div class="baner_content">
    <div>
        <h1>¿Ya sabes los beneficios de tu cuenta Mōkaru?</h1>

        <p>Abre tu billetera Mokaru en minutos y disfruta de rentabilidades al mes del 2% al 3%* según el tipo de billetera que elijas.</p>
        <p class="small">Aplican términos y condiciones*</p>
    </div>

    <img  src="http://mokaru.com.co/wp-content/uploads/2022/10/cuentasMokaru.png" alt="cartas con logo de mokaru">
</div>

<div class="btn_container_servicios">
    <button class="selector active_selector" onclick=onClick_Cuentas() id="CuentasMok">Cuentas Mōkaru</button>
    <button class="selector" id="RetiroMok" onclick=onClick_Retiro()>Planea tu retiro</button>
    <button class="selector" id="AlcanciaMok" onclick=onClick_Alcancia()>Alcancias digitales</button>
</div>

</section>

<!---------------------------------->

<!---------------------------------->
<section class="cards_Servicios_servicios" id="cartasServicio">

<div class="card_servicios">
<div class="face_servicios front_servicios">
    <div class="imgCard_servicios">
        <img   src="http://mokaru.com.co/wp-content/uploads/2022/10/CARDgold.png" alt="pcazul">
    </div>
    <h3>Billetera Mōkaru Gold</h3>
    <p>Con tu cuenta mokaru Gold podras acceder a todos los servicios Mokaru, esta cuenta te dara una rentabilidad mensual hasta de 2%.
        <br>
        <br>

        El deposito inicial para esta cuenta des de 350USDT</p>

        <p class="hoverbtn_servicios">Saber más</p>
</div>

<div class="face_servicios back_servicios">
    <h3>Billetera Mōkaru Gold</h3>
    <p>
        Con tu cuenta mokaru Gold podras acceder a todos los servicios Mokaru, esta cuenta te dara una rentabilidad mensual hasta de 2%.
<br><br>
        La apertura de esta cuenta se realiza con un deposito inicial de 350 USDT a 10 meses con una rentabilidad fija de 18%, al terminar este plazo, los fondos los podras retirar de tu cuenta mokaru o dejarlos sin un plazo fijo.
        <br><br>
        Luego de este deposito podras transferir mas fondos a tu cuenta, los cuales te generan una rentabilidad de 2% aprox, estos los podras retirar cuando quieras. 
    </p>

    <a href="#">Quiero abrir mi cuenta</a>

</div>
</div>

<div class="card_servicios">
<div class="face_servicios front_blackbg_servicios">
    <div class="imgCard_servicios">
        <img   src="http://mokaru.com.co/wp-content/uploads/2022/10/CardBlack.png" alt="card black">
    </div>
    <h3>Billetera Mōkaru Black</h3>
    <p>Con tu cuenta mokaru Black podras acceder a todos los servicios Mokaru, esta cuenta te dara una rentabilidad mensual hasta de 3%.
        <br>
        <br>

        El deposito inicial para esta cuenta des de 1.000 USDT</p>

        <p class="hoverbtn_servicios">Saber más</p>
</div>

<div class="face_servicios back_black_servicios">
    <h3>Billetera Mōkaru Black</h3>
    <p>
        Con tu cuenta mokaru Black podras acceder a todos los servicios Mokaru, esta cuenta te dara una rentabilidad mensual hasta de 3%.
<br><br>
        La apertura de esta cuenta se realiza con un deposito inicial de 1.000 USDT a 10 meses con una rentabilidad fija de 18%, al terminar este plazo, los fondos los podras retirar de tu cuenta mokaru o dejarlos sin un plazo fijo.
        <br><br>
        Luego de este deposito podras transferir mas fondos a tu cuenta, los cuales te generan una rentabilidad de 3% aprox, estos los podras retirar cuando quieras. 
    </p>

    <a href="#">Quiero abrir mi cuenta</a>

</div>
</div>

<div class="card_servicios">
<div class="face_servicios front_servicios">
    <div class="imgCard_servicios">
        <img   src="http://mokaru.com.co/wp-content/uploads/2022/10/ExportPlaninum.png" alt="pcazul">
    </div>
    <h3>Billetera Mōkaru Platinum</h3>
    <p>Con tu cuenta mokaru Platinum podras acceder a todos los servicios Mokaru, esta cuenta te dara una rentabilidad mensual hasta de 2.5%.
        <br>
        <br>

        El deposito inicial para esta cuenta des de 500 USDT</p>

        <p class="hoverbtn_servicios">Saber más</p>
</div>

<div class="face_servicios back_servicios">
    <h3>Billetera Mōkaru Platinum</h3>
    <p>
        Con tu cuenta mokaru Platinum podras acceder a todos los servicios Mokaru, esta cuenta te dara una rentabilidad mensual hasta de 2.5%.
<br><br>
        La apertura de esta cuenta se realiza con un deposito inicial de 500 USDT a 10 meses con una rentabilidad fija de 18%, al terminar este plazo, los fondos los podras retirar de tu cuenta mokaru o dejarlos sin un plazo fijo.
        <br><br>
        Luego de este deposito podras transferir mas fondos a tu cuenta, los cuales te generan una rentabilidad de 2.5% aprox, estos los podras retirar cuando quieras. 
    </p>

    <a href="#">Quiero abrir mi cuenta</a>

</div>
</div>
</section>  

<!---------------------------------->

<section class="retiro " id="retiroServicio">

<div class="tuRetiroServicios">

<div>
    <h2>¿Ya sabes que harás cuando te retires?</h2>
    <p>
        ¿Ya has pensado cuánto dinero quieres tener al momento de retirarte para disfrutar la vida a tu manera? o ¿eres madre/padre de familia y quieres que tus hijos(as) tengan su vida asegurada?, con tus ahorros de hoy y CERO endeudamiento puedes tener esa cantidad que planeas para ti y los tuyos, es solo cuestión de tiempo y disciplina para que con nosotros puedas hacer de estas metas una realidad.
        <br><br>
        “Tus planes, son los nuestros” - Mōkaru
    </p>
    <a href="#" class="abrirCuentaServicios">Abrir mi cuenta</a>
</div>

<img src="http://mokaru.com.co/wp-content/uploads/2022/10/planeaTuRetiro.png" alt="Planea tu retiro">

</div>



<div class="background">
<div id="whrap-1">
    <div class="retiro-simulador">

    
        <div class="retiro-tittle">
            <h1>Simula como será tu retiro</h1>
            <p>Calcula cuanto dinero puedes ganar con tu ahorro. <span>Entre mas plazo elijas más ganas</span></p>
        </div>

        <div class="retiro-input">

            <div class="ahorrarcont-ret">
                <p class="ahorro-t-ret">¿Cuanto aportarias a tu fondo de retiro cada año?</p>
                
                    <label class="ahorro-t-ret">$</label>
                    <input class="registro-f-ret" type="number" name="CI" placeholder="En USDT" id="CI">
                
            </div>
            
            <div class="ahorrarcont-ret margin">
                <p class="ahorro-t-ret">¿Por cuanto tiempo?</p>
                
                    
                    <input class="registro-f-ret" type="number" name="T" placeholder="30 años es lo recomendado" id="T">
                
            </div>

        </div>

        <div class="retiro-result">

            <div class="cuadro-retiro">
                <div>
                    <p class="cuadro-t-retiro">Te retirarias con:</p>
                    <p class="Rendimiento-retiro" id="resultado-retiro">Resultado en USDT</p>
                </div>

            
            </div>

        </div>
        
        <div class="retiro-btn">
            <button class="simular-btn" onclick="calcular()">Simular Retiro</button>
        </div>
    </div>

</div>
</div > 
</section>



<section class="retiro noShow_servicios" id="alcanciaServicio">

<div class="tuRetiroServicios">

<div>
    <h2>Alcanza tu meta con nosotros</h2>
    <p>
        ¿Ya has pensado cuánto dinero quieres tener al momento de retirarte para disfrutar la vida a tu manera? o ¿eres madre/padre de familia y quieres que tus hijos(as) tengan su vida asegurada?, con tus ahorros de hoy y CERO endeudamiento puedes tener esa cantidad que planeas para ti y los tuyos, es solo cuestión de tiempo y disciplina para que con nosotros puedas hacer de estas metas una realidad.
        <br><br>
        “Tus planes, son los nuestros” - Mōkaru
    </p>
    <a href="#" class="abrirCuentaServicios">Abrir mi cuenta</a>
</div>

<img src="http://mokaru.com.co/wp-content/uploads/2022/10/planeaTuRetiro.png" alt="Planea tu retiro">

</div>

</section>

<img class="bgfaq" src="../../img/circulos.png" alt="Fondo">
<?php 


get_footer();

?>



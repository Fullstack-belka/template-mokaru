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
        <h1>¿Ya sabes los beneficios de tu billetera Mōkaru?</h1>

        <p>Obtén tu billetera Mōkaru en minutos y disfruta rentabilidades mensuales del 2% al 3% según la categoría de tu cuenta seleccionada, además de servicios exclusivos como: “Mi Retiro” y “Alcancía Digital”.</p>
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
<section class="cards_Servicios_servicios cards_flex" id="cartasServicio">

        <div class="card_servicios">
            <div class="face_servicios front_servicios">
                <div class="imgCard_servicios">
                    <img   src="http://mokaru.com.co/wp-content/uploads/2022/10/CARDgold.png" alt="card gold">
                </div>
                <h3>Billetera Mōkaru Gold</h3>
                <p>Con tu billetera Black podrás hacer uso de los servicios exclusivos ofrecidos por Mōkaru para hacer crecer tu patrimonio. <br> <br>

                    Esta billetera ofrece un beneficio de hasta 2% mensual sobre tus activos.</p>

                <p class="hoverbtn_servicios" onClick=displayCardGold()>Saber más</p>
            </div>
        </div>




        <div class="card_servicios">
            <div class="face_servicios front_blackbg_servicios">
                <div class="imgCard_servicios">
                    <img   src="http://mokaru.com.co/wp-content/uploads/2022/10/CardBlack.png" alt="card black">
                </div>
                <h3>Billetera Mōkaru Black</h3>
                <p>Con tu billetera Black podrás hacer uso de los servicios exclusivos ofrecidos por Mōkaru para hacer crecer tu patrimonio. <br> <br>

                    Esta billetera ofrece un beneficio de hasta 3% mensual sobre tus activos.</p>

                <p class="hoverbtn_servicios" onClick=displayCardBlack()>Saber más</p>
            </div>

        </div>




        <div class="card_servicios">
            <div class="face_servicios front_servicios">
                <div class="imgCard_servicios">
                    <img   src="http://mokaru.com.co/wp-content/uploads/2022/10/ExportPlaninum.png" alt="card platinum">
                </div>
                <h3>Billetera Mōkaru Platinum</h3>
                <p>Con tu billetera Platinum podrás hacer uso de los servicios exclusivos ofrecidos por Mōkaru para hacer crecer tu patrimonio. <br> <br>

                    Esta billetera ofrece un beneficio de hasta 2.5% mensual sobre tus activos.</p>

                <p class="hoverbtn_servicios" onClick=displayCardPlatinum()>Saber más</p>
            </div>


        </div>






        <div class="retiro noShow_servicios" id="cardBlackdescripcion">

            <div class="tuRetiroServicios">

            <div>
                <h2>Billetera Mōkaru Black</h2>
                <p>
                La apertura de esta billetera se realiza
                con un depósito inicial de 1.000 USDT que te retornará una rentabilidad fija de 18% en los próximos 10 meses, y te permitirá hacer uso de los demás servicios Mōkaru al instante, terminado este período podrás retirar los fondos de tu Billetera Mōkaru o dejarlos sin un plazo fijo en la misma y recibir un retorno mensual del 3%, enviarlos a tu “Alcancía Digital” o destinarlos a tu plan “Mi Retiro”.
                <br><br>
                Billeteras disponibles en Colombia: 5.000
                <br><br>
                USDT es utilizado para las transacciones entre el cliente y Mōkaru don embargo tus activos siempre estarán en USD por tu seguridad y la nuestra.
                </p>
                <a href="/crea-tu-cuenta" class="abrirCuentaServicios">Abrir mi cuenta</a>
            </div>

            <img src="http://mokaru.com.co/wp-content/uploads/2022/10/CardBlack.png" alt="card black">

            </div>

        </div>


        <div class="retiro noShow_servicios" id="cardGolddescripcion">

            <div class="tuRetiroServicios">

            <div>
            <h2>Billetera Mōkaru Gold</h2>
                <p>
                La apertura de esta billetera se realiza
                con un depósito inicial de 350 USDT que te retornará una rentabilidad fija de 18% en los próximos 10 meses, y te permitirá hacer uso de los demás servicios Mōkaru al instante, terminado este período podrás retirar los fondos de tu Billetera Mōkaru o dejarlos sin un plazo fijo en la misma y recibir un retorno mensual del 2%, enviarlos a tu “Alcancía Digital” o destinarlos a tu plan “Mi Retiro”.
                <br><br>
                Billeteras disponibles en Colombia: 20.000
                <br><br>
                USDT es utilizado para las transacciones entre el cliente y Mōkaru don embargo tus activos siempre estarán en USD por tu seguridad y la nuestra.
                </p>
                <a href="/crea-tu-cuenta" class="abrirCuentaServicios">Abrir mi cuenta</a>
            </div>

            <img src="http://mokaru.com.co/wp-content/uploads/2022/10/CARDgold.png" alt="card gold">

            </div>

        </div>


        <div class="retiro noShow_servicios" id="cardPlatinumDescripcion">

            <div class="tuRetiroServicios">

            <div>
            <h2>Billetera Mōkaru Platinum</h2>
                <p>
                La apertura de esta billetera se realiza
                con un depósito inicial de 500 USDT que te retornará una rentabilidad fija de 18% en los próximos 10 meses, y te permitirá hacer uso de los demás servicios Mōkaru al instante, terminado este período podrás retirar los fondos de tu Billetera Mōkaru o dejarlos sin un plazo fijo en la misma y recibir un retorno mensual del 2.5%, enviarlos a tu “Alcancía Digital” o destinarlos a tu plan “Mi Retiro”.
                <br><br>
                Billeteras disponibles en Colombia: 10.000
                <br><br>
                USDT es utilizado para las transacciones entre el cliente y Mōkaru don embargo tus activos siempre estarán en USD por tu seguridad y la nuestra.
                </p>
                <a href="/crea-tu-cuenta" class="abrirCuentaServicios">Abrir mi cuenta</a>
            </div>

            <img src="http://mokaru.com.co/wp-content/uploads/2022/10/ExportPlaninum.png" alt="card Platinum">

            </div>

        </div>


















</section>  





























<!---------------------------------->

<section class="retiro noShow_servicios" id="retiroServicio">

<div class="tuRetiroServicios">

<div>
    <h2>¿Ya sabes que harás cuando te retires?</h2>
    <p>
        ¿Ya has pensado cuánto dinero quieres tener al momento de retirarte para disfrutar la vida a tu manera? o ¿eres madre/padre de familia y quieres que tus hijos(as) tengan su vida asegurada?, con tus ahorros de hoy y CERO endeudamiento puedes tener esa cantidad que planeas para ti y los tuyos, es solo cuestión de tiempo y disciplina para que con nosotros puedas hacer de estas metas una realidad.
        <br><br>
        “Tus planes, son los nuestros” - Mōkaru
    </p>
    <a href="/crea-tu-cuenta" class="abrirCuentaServicios">Abrir mi cuenta</a>
</div>

<img src="http://mokaru.com.co/wp-content/uploads/2022/10/planeaTuRetiro.png" alt="Planea tu retiro">

</div>



<div class="background">
<div id="whrap-1">
    <div class="retiro-simulador">

    
        <div class="retiro-tittle">
            <h1>Simula como será tu retiro</h1>
            <p>Simula tu retiro con Mōkaru.<br>Planea tu futuro económico con nosotros, <span>en el plazo que elijas y con el aporte que tú quieras.</span> Puedes hacer tu aporte cada año o un único primer aporte para el tiempo de tu elección,<br><span>retirarse rápido nunca había sido tan fácil.</span></p>
        </div>

        <div class="retiro-input">

            <div class="ahorrarcont-ret">
                <p class="ahorro-t-ret">¿Con cuento iniciarias el primer año?</p>
                
                    
                    <input class="registro-f-ret" type="number" name="CI" placeholder="En USD" id="CI">
                
            </div>



        <div class="retiro-input">
        <div>
                    <button id="aporteAnualBtn">
                        Quiero aportar anualmente a mi retiro
                    </button>

                    <button id="noAporteAnualBtn" class="noShow">
                        Quiero aportar una sola vez
                    </button>
            </div>
            <div class="ahorrarcont-ret" id="aporteAnualSection">
                <p class="ahorro-t-ret">¿Cuanto aportarias a tu fondo de retiro cada año? (Puedes dejarlo en 0)</p>
                
                    
                    <input class="registro-f-ret" type="number" name="AP" placeholder="Lo puedes dejar en 0" id="AP">
                
            </div>
            
            <div class="ahorrarcont-ret margin">
                <p class="ahorro-t-ret">¿Por cuanto tiempo?</p>
                
                    
                    <input class="registro-f-ret" type="number" name="T" placeholder="Tiempo en años" id="T">
                
            </div>

        </div>

        <div class="retiro-result">

            <div class="cuadro-retiro">
                <div>
                    <p class="cuadro-t-retiro">Te retirarias con:</p>
                    <p class="Rendimiento-retiro" id="resultado-retiro">Resultado en USD</p>
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
        Con nuestras alcancias digitales puedes acceder hasta un 24% de interes compuesto anual, y puedes personalizar tu forma de ahorro desde 5 hasta 36 meses
        <br><br>
        “Tus planes, son los nuestros” - Mōkaru
    </p>
    <a href="/crea-tu-cuenta" class="abrirCuentaServicios">Abrir mi cuenta</a>
</div>

<img src="http://mokaru.com.co/wp-content/uploads/2022/10/planeaTuRetiro.png" alt="Planea tu retiro">

</div>

</section>

<img class="bgfaq" src="http://mokaru.com.co/wp-content/uploads/2022/10/circulos.png" alt="Fondo">
<?php 


get_footer();

?>



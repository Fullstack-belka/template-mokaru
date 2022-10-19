<?php
/**
 * Template Name: FAQ
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

<section class="faq">
        <div>

            <h1>Bienvenido a nuestra sección de ayuda</h1>
            <p>Si no encuentras lo que buscas puedes ponerte en contacto con <a href="/contacto">nosotros</a></p>
            <div class="accordion" id="accordionExample">


                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ¿Cómo funciona Mōkaru?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>


                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Que puedo hacer con mi cuenta?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>


                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Cuando se habilitan los demás servicios?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      ¿Quiénes podrán acceder a Mokaru?
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      La oferta de nuestras billeteras se limita a 35.000 usuarios ya que nuestro enfoque
                      es totalmente personalizado ya que haremos que esos “sueños” que hoy tienes se
                      conviertan en tus planes, no sabes lo lejos que alguien puede llegar con
                      convicción y unos cuantos dólares. Aplican Términos y Condiciones.
                      </div>
                    </div>
                  </div>


                  <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    ¿Es segura mi inversión?
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    Una de las dudas mas importantes es cómo nosotros obtenemos beneficios y cómo
                    protegemos los activos de nuestros clientes; vamos por partes, lo primero es que nuestras
                    operaciones en el mercado son en largo y en corto, es decir, podemos obtener beneficios
                    abriendo posiciones a la baja o al alza lo cual nos permite tener un mundo mas amplio de
                    oportunidades en los mercados de divisas y los comodities; ahora, ¿cómo protegemos los
                    activos de nuestros usuarios en estos mercados?, esto lo logramos gracias a que nuestras
                    transacciones hacen parte de una red liquida respaldada por la banca y diferentes fondos
                    privados de la cual hacemos uso para ejecutarlas lo que nos permite tener un balance
                    eficiente para generar beneficios guiado por nuestra inteligencia artificial que se encarga
                    de operar ambos mercados.
                    </div>
                  </div>
                </div>
                
              </div>
            
        </div>
        
    </section>

<?php 


get_footer();

?>



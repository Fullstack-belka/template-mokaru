console.log("hola")

const menuOpen = document.getElementById("menu_front");
const menuClose = document.getElementById("close_front");
const overlay = document.getElementById("overlay");


function openMenu() {
  overlay.classList.add("overlay--active");
}

function closeMenu() {
  overlay.classList.remove("overlay--active");
}





//Simulador
function calcular() {
  var CI = parseInt(document.getElementById('CI').value)
  const Interes = 1.26
  const Interes2 = 0.26 
  var Años = parseInt(document.getElementById('T').value)
  var Aporte = parseInt(document.getElementById('AP').value)
  var año0 = CI + Aporte

  var parte1 =   año0*(Interes)**Años

  var pt2 = Aporte*((Interes**Años)-1)

  var parte2 = pt2/Interes2

  var resultado = (parte1 + parte2)-CI

  const rendimientoRet = document.getElementById("resultado-retiro")
  var ansRetiro = new Intl.NumberFormat('de-DE', { maximumSignificantDigits: 3 }).format(resultado) + " USD";

  
  if (CI > 0 && Años >= 10){

      rendimientoRet.innerHTML = ansRetiro


      
  }
  
  else if (CI <= 0) {
      alert("ingresa un monto valido")
  }

  else {
      alert("El tiempo minimo son 10 años")
  }

  
}

//botones

// noShow_servicios = no mostrar  active_selector = Link Activo
const cardscuenta = document.getElementById("cartasServicio")
const retiro = document.getElementById("retiroServicio")
const alcanciaS = document.getElementById("alcanciaServicio")


function onClick_Cuentas() {
  document.getElementById("CuentasMok").classList.add("active_selector")
  document.getElementById("RetiroMok").classList.remove("active_selector")
  document.getElementById("AlcanciaMok").classList.remove("active_selector")

  cardscuenta.classList.add("cards_flex")
  cardscuenta.classList.remove("noShow_servicios")
  retiro.classList.add("noShow_servicios")
  alcanciaS.classList.add("noShow_servicios")

}

function onClick_Retiro() {
  document.getElementById("CuentasMok").classList.remove("active_selector")
  document.getElementById("RetiroMok").classList.add("active_selector")
  document.getElementById("AlcanciaMok").classList.remove("active_selector")

  cardscuenta.classList.remove("cards_flex")
  cardscuenta.classList.add("noShow_servicios")
  retiro.classList.remove("noShow_servicios")
  alcanciaS.classList.add("noShow_servicios")
}

function onClick_Alcancia() {
  document.getElementById("CuentasMok").classList.remove("active_selector")
  document.getElementById("RetiroMok").classList.remove("active_selector")
  document.getElementById("AlcanciaMok").classList.add("active_selector")

  cardscuenta.classList.remove("cards_flex")
  cardscuenta.classList.add("noShow_servicios")
  retiro.classList.add("noShow_servicios")
  alcanciaS.classList.remove("noShow_servicios")
}


function displayCardBlack() {
  document.getElementById("cardBlackdescripcion").classList.remove("noShow_servicios")
  document.getElementById("cardGolddescripcion").classList.add("noShow_servicios")
  document.getElementById("cardPlatinumDescripcion").classList.add("noShow_servicios")
}

function displayCardGold() {
  document.getElementById("cardBlackdescripcion").classList.add("noShow_servicios")
  document.getElementById("cardGolddescripcion").classList.remove("noShow_servicios")
  document.getElementById("cardPlatinumDescripcion").classList.add("noShow_servicios")
}

function displayCardPlatinum() {
  document.getElementById("cardBlackdescripcion").classList.add("noShow_servicios")
  document.getElementById("cardGolddescripcion").classList.add("noShow_servicios")
  document.getElementById("cardPlatinumDescripcion").classList.remove("noShow_servicios")
}




const btnAnual = document.getElementById('aporteAnualBtn')
const sectionAnual = document.getElementById('aporteAnualSection')
const noBtnAnual = document.getElementById('noAporteAnualBtn')

btnAnual.addEventListener("click", () => {
  sectionAnual.classList.toggle("noShow")
  btnAnual.classList.toggle("noShow")
  noBtnAnual.classList.toggle("noShow")
})

noBtnAnual.addEventListener("click", () => {
  sectionAnual.classList.toggle("noShow")
  btnAnual.classList.toggle("noShow")
  noBtnAnual.classList.toggle("noShow")

})
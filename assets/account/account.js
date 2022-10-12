var miCuenta = document.getElementById('btnMiCuenta')
var miMembresia = document.getElementById('btnMiMembresia')
var Facturas = document.getElementById('btnFacturas')


const infoMiCuenta = document.getElementById('miCuenta')
const infoMiMembresia = document.getElementById('miMembresia')
const InfoFacturas = document.getElementById('facturas')

var view = localStorage.getItem("View");

miCuenta.addEventListener("click", () =>{
    miCuenta.classList.add("activeW")
    miMembresia.classList.remove("activeW")
    Facturas.classList.remove("activeW")

    infoMiCuenta.classList.remove("noShow")
    infoMiMembresia.classList.add("noShow")
    InfoFacturas.classList.add("noShow")

    /*Guardando los datos en el LocalStorage*/
    localStorage.setItem("View", 'miCuenta');
})


Facturas.addEventListener("click", () =>{
    Facturas.classList.add("activeW")
    miCuenta.classList.remove("activeW")
    miMembresia.classList.remove("activeW")

    infoMiCuenta.classList.add("noShow")
    infoMiMembresia.classList.add("noShow")
    InfoFacturas.classList.remove("noShow")
    localStorage.setItem("View", 'Facturas');
})

miMembresia.addEventListener("click", () =>{
    miMembresia.classList.add("activeW")
    miCuenta.classList.remove("activeW")
    Facturas.classList.remove("activeW")

    infoMiCuenta.classList.add("noShow")
    infoMiMembresia.classList.remove("noShow")
    InfoFacturas.classList.add("noShow")

    localStorage.setItem("View", 'miMembresia');
})



if( view == 'miCuenta'){
    miCuenta.click();
}
if( view == 'Facturas'){
    Facturas.click();    
}
if( view == 'miMembresia'){
    miMembresia.click();
}
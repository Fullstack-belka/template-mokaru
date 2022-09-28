const miCuenta = document.getElementById('btnMiCuenta')
const miMembresia = document.getElementById('btnMiMembresia')
const Facturas = document.getElementById('btnFacturas')


const infoMiCuenta = document.getElementById('miCuenta')
const infoMiMembresia = document.getElementById('miMembresia')
const InfoFacturas = document.getElementById('facturas')


miCuenta.addEventListener("click", () =>{
    miCuenta.classList.add("activeW")
    miMembresia.classList.remove("activeW")
    Facturas.classList.remove("activeW")

    infoMiCuenta.classList.remove("noShow")
    infoMiMembresia.classList.add("noShow")
    InfoFacturas.classList.add("noShow")
})


Facturas.addEventListener("click", () =>{
    Facturas.classList.add("activeW")
    miCuenta.classList.remove("activeW")
    miMembresia.classList.remove("activeW")

    infoMiCuenta.classList.add("noShow")
    infoMiMembresia.classList.add("noShow")
    InfoFacturas.classList.remove("noShow")
})

miMembresia.addEventListener("click", () =>{
    miMembresia.classList.add("activeW")
    miCuenta.classList.remove("activeW")
    Facturas.classList.remove("activeW")

    infoMiCuenta.classList.add("noShow")
    infoMiMembresia.classList.remove("noShow")
    InfoFacturas.classList.add("noShow")
})
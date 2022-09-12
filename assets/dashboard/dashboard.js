const toggleNav = document.getElementById('menubtn')
const menu = document.getElementById('menu')


if(toggleNav){

    toggleNav.addEventListener("click", () => {
        menu.classList.toggle("menu_visible")
    }) 
    
    toggleNav.addEventListener("click", () => {
        menu.classList.toggle("none")
    }) 
}



const togglemovil = document.getElementById('movil-billetera')
const menuMovil = document.getElementById('sub-menu-movil')

if(togglemovil){


togglemovil.addEventListener("click", () => {
   menuMovil.classList.toggle("show-sub-menu")
})

}




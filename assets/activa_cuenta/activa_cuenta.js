const goldAccount = document.getElementById('goldAccount')
const platinumAccount = document.getElementById('platinumAccount')
const blackAccount = document.getElementById('blackAccount')
const insert = document.getElementById('insert')

$m(goldAccount).click(function(){
    $m("div[class*='bloque-']").hide()
    $m('.bloque-gold').fadeIn()
});
$m(platinumAccount).click(function(){
    $m("div[class*='bloque-']").hide()
    $m('.bloque-platinum').fadeIn()
});
$m(blackAccount).click(function(){
    $m("div[class*='bloque-']").hide()
    $m('.bloque-black').fadeIn()
});

   
document.getElementById('open').addEventListener("click", () => {
    document.getElementById('infoAdicional').classList.remove('noShow')
})

document.getElementById('close').addEventListener("click", () => {
    document.getElementById('infoAdicional').classList.add('noShow')
})


const toggle = document.getElementById('toggleNav')
const Menu = document.getElementById('menuMovil')



toggle.addEventListener("click", () => {
    Menu.classList.toggle('nav_Novisible')
})

goldAccount.addEventListener("click", () => {
    Menu.classList.add('nav_Novisible')
})

platinumAccount.addEventListener("click", () => {
    Menu.classList.add('nav_Novisible')
})

blackAccount.addEventListener("click", () => {
    Menu.classList.add('nav_Novisible')
})
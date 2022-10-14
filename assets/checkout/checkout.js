'use strict';

var $m = jQuery.noConflict();

const checkout = function(){

    function select_payment() {        
        $m(document).on("click",".btn-payment", function (e) {
            e.preventDefault();
            var payment = $m(this).attr('data-payment');
            $m('#'+payment).click();
            $m('form').submit();       
         });           
    }
    return{
        init: function() {
            select_payment();
        }
    };
}();

checkout.init()




$m('#btn-depositar').click(function(){
    $m(".tab-pane").hide()
    $m('#panel-proveedor').hide()
    $m('#panel-depositar').fadeIn()
    $m('#panel-validar').fadeIn()
    $m('#button-atras').addClass('tab-button-back')
});
$m('#btn-proveedor').click(function(){
    $m(".tab-pane").hide()
    $m('#panel-depositar').hide()
    $m('#panel-proveedor').fadeIn()
    $m('#panel-validar').fadeIn()
    $m('#button-atras').addClass('tab-button-back')
});


$m(document).on("click",".tab-button-back", function (event) {
    event.preventDefault();
    $m(".tab-pane").hide();
    $m('#panel-opciones').fadeIn()
    $m('#button-atras').removeClass('tab-button-back')
 });

const toggleNavi = document.getElementById('toggleNavCheckout')
const menuCheckout = document.getElementById('menuMovilCheckout')

toggleNavi.addEventListener("click", () => {
    menuCheckout.classList.toggle('nav_Novisible')
})

toggleNavi.addEventListener("click", () => {
    Menu.classList.toggle('nav_Novisible')
})





const getRemainTime = deadline =>{
    let now = new Date(),
        remaintTime = (new Date(deadline) - now + 1000) / 1000,
        remainSeconds = ('0' + Math.floor(remaintTime % 60)).slice(-2),
        remainMinutes = ('0' + Math.floor(remaintTime / 60 % 60)).slice(-2);
    return {
        remaintTime,
        remainMinutes,
        remainSeconds
    }
};

function countDown() {
    const el = document.getElementById('clock');
    const actualDate = new Date();
    const dateMs = actualDate.getTime();
    const addMls = 600000 * 2;
    const deadline = new Date(dateMs + addMls);

    const timerUpdate = setInterval(() => {
        let t = getRemainTime(deadline);
        el.innerHTML = `${t.remainMinutes}m:${t.remainSeconds}s`;
    
        if (t.remaintTime <= 1) {
            clearInterval(timerUpdate);
            window.location.replace("https://mokaru.com.co/activemos-tu-cuenta/"); //Nota, verificar si esa es la url / si si es la url
        }
    }, 1000);
}

countDown()


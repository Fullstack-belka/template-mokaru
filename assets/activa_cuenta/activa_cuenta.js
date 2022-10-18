const goldAccount = document.getElementById('goldAccount')
const platinumAccount = document.getElementById('platinumAccount')
const blackAccount = document.getElementById('blackAccount')
const insert = document.getElementById('insert')

 function addToCart(product_id){

    var data = {
        action: 'woocommerce_ajax_add_to_cart',
        product_id: product_id,
        variation_id: 0,
        product_sku: '',
        quantity: 1,
    };
    console.log(product_id)
    
    $m.ajax({
        type: 'post',
        url: wc_add_to_cart_params.ajax_url,
        data: data,
        beforeSend: function (response) {
            //console.log(response)
        },
        complete: function (response) {
           //console.log(response)
        },
        success: function (response) {

            console.log(response)

            if (response.error & response.product_url) {
                window.location = response.product_url;
                return;
            } else {
                $m('#alert-ajax').append(response.fragments);
            }
        },
    });
}



$m(goldAccount).click(function(){
    $m("div[class*='bloque-']").hide()
    $m('.bloque-gold').fadeIn()
    addToCart($m(this).attr('product-id'))
});
$m(platinumAccount).click(function(){
    $m("div[class*='bloque-']").hide()
    $m('.bloque-platinum').fadeIn()
    addToCart($m(this).attr('product-id'))
});
$m(blackAccount).click(function(){
    $m("div[class*='bloque-']").hide()
    $m('.bloque-black').fadeIn()
    addToCart($m(this).attr('product-id'))
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

$m( document ).ready(function() {
    addToCart($m(goldAccount).attr('product-id'))
});
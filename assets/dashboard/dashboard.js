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



const transactions = function(){

    function ocultar() {
        $m(".depositar").click(function(){
            $m('.depositar-view').removeClass('noShow');
            $m('.transactions-view').addClass('noShow');
        });
        $m(".retirar").click(function(){
            $m('.retirar-view').removeClass('noShow');
            $m('.transactions-view').addClass('noShow');
        });
        $m(".salir").click(function(){
            $m('.retirar-view').addClass('noShow');
            $m('.depositar-view').addClass('noShow');
            $m('.transactions-view').removeClass('noShow');
        });

    }

	function deposit_form() {

        $m("#deposit_form").submit(function(e) {
            e.preventDefault(); // avoid to execute the actual submit of the form.
            var form = $m(this);
            var actionUrl = form.attr('action');
            $m.ajax({
                type: "GET",
                url: actionUrl,
                data: form.serialize(), // serializes the form's elements.
                success: function(data)
                {
                    window.location.href = "/checkout";
                }
            });
            
        });
	};

    function retirar_form() {

        /*VALIDACIÓN FORMULARIO DE FORMULARIO*/
        $m("#form-retiro").validate({
            rules: {
                usdt:{required:true,max:member.amount, min:50},
                wallet:{required:true,minlength: 8}
            },
            messages:{
                usdt:{required:"Por favor digite un monto", max:"No puedes retirar más de "+member.amount , min: "Solo puedes retirar de 50 USDT en adelante"},
                wallet:{required:"Por favor digite su billetera", minlength:"La billetera debe ser de al menos 8 carácteres."},
            },
            
            errorElement: 'div',
            submitHandler: (function(form) {
                $m.ajax({
                    type: "POST",
                    url: retirar_vars.url,
                    data: {
                        usdt : $m(form).find('#usdt').val(),
                        wallet : $m(form).find('#wallet').val(),
                        action : retirar_vars.action,
                        nonce : retirar_vars.nonce
                    } ,
                    success: function(data)
                    {   
                        console.log(data)
                       if(data.statusCode > 0){
                            $m(form).find('.alert-message').html(data.msg)
                       }
                    }
                });
            })
        });

	};
	


    return{
        init: function() {
            deposit_form();
            retirar_form();
            ocultar();
        }

        
    };

}();




$m(document).ready(function () {
	transactions.init();
});



//pop up retiros
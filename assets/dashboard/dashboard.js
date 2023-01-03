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
            $m('.transferir-view').addClass('noShow')
        });
        $m(".retirar").click(function(){
            $m('.retirar-view').removeClass('noShow');
            $m('.transactions-view').addClass('noShow');
            $m('.transferir-view').addClass('noShow')
        });
        $m(".servicios-mok").click(function(){
            $m('.retirar-view').addClass('noShow');
            $m('.transactions-view').addClass('noShow');
            $m('.transferir-view').removeClass('noShow')
        });
        $m(".depositar-servicios").click(function(){
            $m('div[class$="-view"]').addClass('noShow')
            $m('.depositarModulo-view').removeClass('noShow')
        });
        $m(".salir").click(function(){
            $m('div[class$="-view"]').addClass('noShow')
            $m('.transactions-view').removeClass('noShow');
        });

    }

	function deposit_form() {

          /*VALIDACIÓN FORMULARIO DE FORMULARIO*/
          $m("#deposit_form").validate({
            rules: {
                alg_open_price:{required:true,digits: true, min:50}
            },
            messages:{
                alg_open_price:{required:"Por favor digite un monto", min: "Solo puedes recargar de 50 USDT en adelante"}
            },
            
            errorElement: 'div',
            onfocusout: function(e) {
                this.element(e);
            },

            submitHandler: (function(form) {
                var form = $m("#deposit_form");
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
            })
        });

	};
    function retirar_form() {

        /*VALIDACIÓN FORMULARIO DE FORMULARIO*/
        $m("#form-retiro").validate({
            rules: {
                usdt:{required:true,digits: true, min:50,max:member.amount},
                wallet:{required:true,minlength: 8}
            },
            messages:{
                usdt:{required:"Por favor digite un monto", max:"No puedes retirar más de "+Math.round(member.amount) , min: "Solo puedes retirar de 50 USDT en adelante"},
                wallet:{required:"Por favor digite su billetera", minlength:"La billetera debe ser de al menos 8 carácteres."},
            },
            
            errorElement: 'div',
            onfocusout: function(e) {
                this.element(e);
            },
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
                        var data = $m.parseJSON(data);
                       if(data.statusCode > 0){
                            $m(form).find('.alert-message').html(data.msg)
                       }
                    }
                });
            })
        });

	};
    function desposit_services() {

        /*VALIDACIÓN FORMULARIO DE FORMULARIO*/
        $m("#form-recargar-modulo").validate({
            rules: {
                amount:{required:true,digits: true, min:10,max:member.amount},
                line_to:{required:true}
            },
            messages:{
                amount:{required:"Por favor digite un monto", max:"No puedes depositar más de "+Math.round(member.amount) , min: "Solo puedes retirar de 10 USDT en adelante"},
                line_to:{required:"Por favor seleccione un módulo de recarga"},
            },            
            errorElement: 'div',
            onfocusout: function(e) {
                this.element(e);
            },
            submitHandler: (function(form) {
                $m.ajax({
                    type: "POST",
                    url: deposit_lines_vars.url,
                    data: {
                        amount : $m(form).find('#amount').val(),
                        line_to : $m(form).find('#line_to').val(),
                        action : deposit_lines_vars.action,
                        nonce : deposit_lines_vars.nonce
                    } ,
                    success: function(data)
                    {   
                        var data = $m.parseJSON(data);
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
            desposit_services();
            ocultar();
        }

        
    };

}();




$m(document).ready(function () {
	transactions.init();
});



//pop up retiros
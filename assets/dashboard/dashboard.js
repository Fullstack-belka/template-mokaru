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
        $m(".salir").click(function(){
            $m('div[class$="-view"]').addClass('noShow')
            $m('.transactions-view').removeClass('noShow');
        });

        
    }

	function deposit_form() {

          /*VALIDACIÓN FORMULARIO DE FORMULARIO*/
          $m("#deposit_form").validate({
            rules: {
                alg_open_price:{required:true,digits: true, min:50,number:true}
            },
            messages:{
                alg_open_price:{required:"Por favor digite un monto",number:"Solo puedes ingresar números", min: "Solo puedes recargar de 50 USDT en adelante"}
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
                usdt:{required:true,digits: true, min:50,max:Math.round(member.amount)},
                wallet:{required:true,minlength: 8}
            },
            messages:{
                usdt:{required:"Por favor digite un monto", number:"Solo puedes ingresar números", max:"No puedes retirar más de "+Math.round(member.amount) , min: "Solo puedes retirar de 50 USDT en adelante"},
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
                amount:{required:true,digits: true, number:true, min:10,max:Math.round(member.amount)},
                line_to:{required:true}
            },
     
            messages:{
                amount:{required:"Por favor digite un monto",number:"Solo puedes ingresar números", max:"No puedes transferir más de "+Math.round(member.amount)+" USDT" , min: "Solo puedes retirar de 10 USDT en adelante"},
                line_to:{required:"Por favor seleccione un módulo de salida"},
                line_from:{required:"Por favor seleccione un módulo de recarga"},
            },            
            errorElement: 'div',
            onkeyup: false,
            onfocusout: function(element) {$m(element).valid()},
            submitHandler: (function(form) {
                $m.ajax({
                    type: "POST",
                    url: deposit_lines_vars.url,
                    data: {
                        amount : $m(form).find('#amount').val(),
                        line_to : $m(form).find('#line_to').val(),
                        line_from : $m(form).find('#line_from').val(),
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

        $m(".depositar-servicios").click(function(){
            const id_line_to = $m(this).attr('data-line-to-id');
            const id_line_from = $m(this).attr('data-line-from-id');

            $m('div[class$="-view"]').addClass('noShow')
            $m('.depositarModulo-view').removeClass('noShow')
            $m('#form-recargar-modulo').trigger("reset");
            $m('#form-recargar-modulo #line_to').val(id_line_to);
            $m('#form-recargar-modulo #line_from').val(id_line_from);
            let line_to = get_line_member(id_line_to , member.mokaru_id ) 
            let line_from = get_line_member(id_line_from,member.mokaru_id ) 
            $m('.name-line').html(line_to.name);


            if(line_to.line_id == 1){
                line_to.amount_line = member.amount;
            }
            if(line_from.line_id == 1){
                line_from.amount_line = member.amount;
            }
            
            $m('#amount').rules('add',{max:Math.round(line_from.amount_line) , messages:{ max:'No puedes transferir más de '+Math.round(line_from.amount_line)+" USDT" } }); 
        });

        function get_line_member(line_id, mokaru_id){
            var line = {};
            $m.ajax({
                type: "POST",
                url: get_line_vars.url,
                data: {
                    line_id : line_id,
                    mokaru_id : mokaru_id,
                    action : get_line_vars.action,
                    nonce : get_line_vars.nonce
                },
                async: false,
                success: function(data)
                {   
                   line = $m.parseJSON(data);
                   
                }
            });

            return line
        }

	};
    function validateInputs() {

        /*MAYUSCULAS*/
        $m('body').on('paste input propertychange', '.clean_mayus', function () {
            this.value = this.value.toUpperCase();
        });
        
        /*STRINGS MAYUSCULAS*/
        $m('body').on('paste input propertychange', '.clean_string_mayus', function () {
            this.value = this.value.toUpperCase().replace(/[0-9]+/, '');
        });

        /*========== FUNCIÓN (UNICAMENTE LETRAS Y NUMEROS) ===========*/
        $m('body').on('paste input propertychange', '.clean_string_number', function data_number() {
            this.value = this.value.replace(/[^a-zA-Z0-9\s]/g, '');
        });
        /*========== FUNCIÓN (UNICAMENTE LETRAS Y NUMEROS) ===========*/
        $m('body').on('paste input propertychange', '.clean_string_number_space', function data_number() {
            let string = this.value.replace(/[^a-zA-Z0-9\s]/g, '');
            this.value = string.replace(/\s/g,'');
        });

        /*========== FUNCIÓN (UNICAMENTE CORREO) ===========*/
        $m('body').on('paste input propertychange', '.clean_mail', function () {
            let string  = this.value.replace(/[^0-9A-Za-z‘\@\-\_\.]/g, '');
            string = string.replace(/\s/g,'');
            this.value = string.toLowerCase();
        });

    

        /*========== FUNCIÓN (UNICAMENTE NÚMEROS) ===========*/
        $m('body').on('paste input propertychange', '.clean_number', function data_number() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
        
        /*========== FUNCIÓN (UNICAMENTE NÚMEROS Y PUNTOS) ===========*/
        $m('body').on('paste input propertychange', '.clean_number_dot', function data_number() {
            this.value = this.value.replace(/[^0-9'\.]/g, '');
        });

        /*========== FUNCIÓN (UNICAMENTE NÚMEROS Y COMAS) ===========*/
        $m('body').on('paste input propertychange', '.clean_number_point', function data_number() {
            this.value = this.value.replace(/[^0-9'\,]/g, '');
        });

        /*========== FUNCIÓN (UNICAMENTE NÚMEROS ,COMAS Y PUNTOS) ===========*/
        $m('body').on('paste input propertychange', '.clean_number_dot_point', function data_number() {
            this.value = this.value.replace(/[^0-9'\,\.]/g, '');
        });

        /*========== FUNCIÓN (UNICAMENTE LETRAS) ===========*/
        $m('body').on('paste input propertychange', '.clean_string', function () {
            this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
        });
        /*========== FUNCIÓN (UNICAMENTE LETRAS) ===========*/
        $m('body').on('paste input propertychange', '.clean_string_space', function () {
            let string = this.value.replace(/[^a-zA-Z\s]/g, '');
            this.value = string.replace(/\s/g,'');
        });

    };

    return{
        init: function() {
            deposit_form();
            retirar_form();
            validateInputs();
            desposit_services();
            ocultar();
        }

        
    };

}();




$m(document).ready(function () {
	transactions.init();
});



//pop up retiros
'use strict';

var $m = jQuery.noConflict();

const dashboard = function(){

    function checkout() {

        var extensionesValidasFile = ".png, .jpg, jpeg";
        function validarExtensionFile(datos) {
                    
            var ruta = datos.value;
            var extension = ruta.substring(ruta.lastIndexOf('.') + 1).toLowerCase();
            var filename = $m('input[type=file]').val().split('\\').pop();

            var extensionValida = extensionesValidasFile.indexOf(extension);
            var parent_fil = $m(datos).parent().find('.con_ima_thumb');
            var img = parent_fil.find('img');
            $m(datos).next(".message_out").remove();
            if(extensionValida < 0) {
                $m(datos).prev().addClass("error_dashed");
                $m(datos).parent().append('<p class="message_out">El archivo .'+extension+' no es permitido.</p>');
                $m(datos).parent().find('.name_document').fadeIn();
                parent_fil.removeClass("thumb_img");
                parent_fil.attr('src', "");
                img.attr('src', "/assets/images/icon/ico_error.png");			
                return false;
            } else {
                $m(datos).prev().removeClass("error_dashed");
                $m(datos).next(".message_out").remove();
                $m(datos).parent().find('.name_document').hide();
                img.attr('src', "");
                parent_fil.attr('src',  "/assets/images/icon/ico_pdf.png");
                parent_fil.addClass("thumb_img");
                return true;
            }
        }
        // Vista preliminar de ARCHIVOO.
        function verImagen(datos) {
            
            if (datos.files && datos.files[0]) {
                var reader = new FileReader();
                reader.onload = function () {
                    $m('.frm_file').addClass("active")
                    $m('.frm_file').css('background-image', "url(" + reader.result + ")")                
                    console.log(reader.result)
                };
                reader.readAsDataURL(datos.files[0]);
            }else{
                $m('.frm_file').removeClass("active")
                $m('.frm_file').css('background-image', "unset")     
            }
        }	        
        $m(".form-file").on('click','.frm_file',function(){
            var input = $m('.file');
            input.click();
        });        
        // Cuando cambie #fichero
        $m("#panel-validar").on('change','.file',function(){
            
            if(validarExtensionFile(this)) {
                verImagen(this);
            }
            
        });                  
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
    }

    return{
        init: function() {
            checkout();
        }
    };

}();

$m(document).ready(function () {
dashboard.init();
});
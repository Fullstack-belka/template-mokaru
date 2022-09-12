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

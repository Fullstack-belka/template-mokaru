/*===========================================================================
=================================LOGIN ====================================== 
============================================================================*/
 jQuery(function(){
	/*VALIDACIÓN INICIO DE SESIÓN*/
	 jQuery("form[name='login']").validate({
		/*CAMPOS PARA VALIDAR EN INICIO DE SESIÓN*/
		rules:{
			log:{required:true,email:true},
			pwd:{required:true,minlength: 8}
		},
		/*MENSAJES DE VALIDACIÓN PARA INICIO DE SESIÓN*/
		messages:{
			log:{required:"Por favor digite su correo electrónico.", email:"Por favor digite un correo electrónico válido."},
			pwd:{required:"Por favor digite su contraseña", minlength:"La contraseña debe ser de al menos 8 carácteres."}
		},
		errorElement: 'div'
	});
	/*FIN VALIDACIÓN INICIO DE SESIÓN*/

	/*VALIDACIÓN OLVIDÓ SU CONTRASEÑA*/
	 jQuery("form[name='lostpassword']").validate({
		rules: {
			user_login:{required: true,email: true}
		},
		messages:{
			user_login:{required: "Por favor digite su email.",email: "Por favor digite un email válido."}
		},
		
		errorElement: 'div'
	});
	
	
	/*VALIDACIÓN FORMULARIO DE REGISTRO*/
	 jQuery("form[name='register']").validate({
		rules: {
			first_name:{required: true},
			last_name:{required: true},
			user_login:{required: true},
			user_email:{required: true,email: true},
			document:{required:true,minlength: 8},
			user_pass1:{required:true,minlength: 6},
			user_pass2:{required:true,minlength: 6,equalTo: '#pass1'}
		},
		messages:{
			first_name:{required: "Por favor digite su nombre."},
			last_name:{required: "Por favor digite su apellido."},
			user_login:{required: "Por favor digite un nombre de usuario."},
			user_email:{required: "Por favor digite su email.",email: "Por favor digite un email válido"},
			document:{required:"Por favor digite su número de documento", minlength:"El documento debe ser de al menos 8 carácteres."},
			user_pass1:{required:"Por favor digite su contraseña", minlength:"La contraseña debe ser de al menos 8 carácteres."},
			user_pass2:{required:"Por favor repita su contraseña", minlength:"La contraseña debe ser de al menos 8 carácteres.", equalTo: "Contraseñas no coinciden."},
		},
		
		errorElement: 'div'
	});
	/*VALIDACIÓN FORMULARIO DE RECUPERAR CONTRA*/
	 jQuery("form[name='resetpass']").validate({
		rules: {

			pass1:{required:true,minlength: 6},
			pass2:{required:true,minlength: 6,equalTo: '#pass1'}
		},
		messages:{
			pass1:{required:"Por favor digite su contraseña", minlength:"La contraseña debe ser de al menos 8 carácteres."},
			pass2:{required:"Por favor repita su contraseña", minlength:"La contraseña debe ser de al menos 8 carácteres.", equalTo: "Contraseñas no coinciden."},
		},
		
		errorElement: 'div'
	});
})



'use strict';

var $m = jQuery.noConflict();

const login = function(){

	function validateInputs() {

		$m("#first_name").addClass("clean_string");
		$m("#last_name").addClass("clean_string");
		$m("#user_email").addClass("clean_mail");
		$m("#user_login").addClass("clean_mail");
		$m("#document").addClass("clean_number");
	
		if(jQuery("form[name='register']").length == 1){
			jQuery("input[name='redirect_to']").val("/dashboard");
		}

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
            validateInputs();
        }
    };

}();

$m(document).ready(function () {
	login.init();
});
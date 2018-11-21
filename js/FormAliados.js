/**
 *  Document   : form-validation.js
 *  Author     : josuelmm92@gmail.com
 *  Description: Script related to validate the form
 *
 **/



var FormValidation = function () {

    var FormAliados = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation


            var form = $('#FormAliados');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);

            form.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: ":hidden",
                rules: {
                    aliado_tipo: {
                        required: true
                    },
                    aliado_nombres: {
                        required: true
                    },
                    aliado_apellidos: {
                        required: true
                    },
                    aliado_razon_social: {
                        required: true
                    },
                    aliado_nit: {
                        required: true
                    },
                    aliado_telefono_fijo: {
                        required: true,
                        number: true
                    },
                    aliado_telefono_celular: {
                        required: true,
                        number: true
                    },
                    aliado_email: {
                        email: true
                    },
                    aliado_web: {
                        url: true
                    },
                    aliado_descripcion: {
                        required: true
                    },
                    aliado_ofrece: {
                        required: true
                    }
                },

                errorPlacement: function (error, element) {
                    error.insertAfter(element);
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    success.hide();
                    error.show();
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element)
                        .closest('.form-group').removeClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    // display success icon for other inputs
                    label.addClass('valid') // mark the current input as valid and display OK icon
                    .closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    
                },

                submitHandler: function (form) {
                    success.show();
                    error.hide();
                    form[0].submit();
                }
            });


    }   

    return {
        init: function () {
            FormAliados();
        }

    };

}();

jQuery(document).ready(function() {
	'use strict';
    FormValidation.init();
});
/**
 *  Document   : form-validation.js
 *  Author     : josuelmm92@gmail.com
 *  Description: Script related to validate the form
 *
 **/



var FormValidation = function () {

    var FormMarca = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation


            var form = $('#FormMarca');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);

            form.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: ":hidden",
                rules: {
                    marca_nombre: {
                        required: true
                    },
                    marca_direccion: {
                        required: true
                    },
                    marca_telefono: {
                        required: true,
                        digits: true
                    },
                    marca_imagen: {
                        required: true,
                        extension: "png|jpeg|jpg"
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
            FormMarca();
        }

    };

}();

jQuery(document).ready(function() {
	'use strict';
    FormValidation.init();
});
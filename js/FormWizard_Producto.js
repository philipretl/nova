/**
 *  Document   : FormWizard_Producto
 *  Author     : josuelmm92@gmail.com
 *  Description: Validación de Formulario de Registro de Usuario
 *
 **/

var FormWizard = function () {


    return {
        //main function to initiate the module
        init: function () {
            if (!jQuery().bootstrapWizard) {
                return;
            }
            var form = $('#FormProducto');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);

            form.validate({
                doNotHideMessage: true, //this option enables to show the error/success messages on tab switch.
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                rules: {
                    producto_titulo: {
                        minlength: 5,
                        required: true
                    },
                    producto_descripcion: {
                        minlength: 5,
                        required: true
                    },
                    producto_letra_chica: {
                        minlength: 5,
                        required: true
                    },
                    producto_email: {
                        minlength: 5,
                        required: true,
                        email: true
                    },
                    producto_nit: {
                        minlength: 5,
                        required: true
                    },
                    producto_palabras_clave: {
                        minlength: 5,
                        required: true
                    },
                    'producto_imagen[]': {
                        required: true,
                        extension: "png|jpeg|jpg",
                        accept: "image/*"
                    }
                },

                errorPlacement: function (error, element) {
                    error.insertAfter(element);
                },

                invalidHandler: function (event, validator) { //display error alert on form submit   
                    success.hide();
                    error.show();
                    App.scrollTo(error, -200);
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
                    //add here some ajax code to submit your form or just call form.submit() if you want to submit the form without ajax
                }

            });

            var displayConfirm = function() {
                $('#tablast .form-control-static', form).each(function(){
                    var input = $('[name="'+$(this).attr("data-display")+'"]', form);
                    if (input.is(":radio")) {
                        input = $('[name="'+$(this).attr("data-display")+'"]:checked', form);
                    }
                    if (input.is(":text") || input.is(":hidden") || input.is("textarea")) {
                        $(this).html(input.val());
                    } else if (input.is("select")) {
                        $(this).html(input.find('option:selected').text());
                    } else if (input.is(":radio") && input.is(":checked")) {
                        $(this).html(input.attr("data-title"));
                    } else if ($(this).attr("data-display") == 'agree') {
                        var agree = [];
                        $('[name="agree"]:checked', form).each(function(){ 
                            agree.push($(this).attr('data-title'));
                        });
                        $(this).html(agree.join("<br>"));
                    }
                });
            }

            var handleTitle = function(tab, navigation, index) {
                var total = navigation.find('li').length;
                var current = index + 1;
                // set done steps
                
                jQuery('li', $('#FormWizard_Producto')).removeClass("done");
                var li_list = navigation.find('li');
                for (var i = 0; i < index; i++) {
                    jQuery(li_list[i]).addClass("done");
                }

                if (current == 1) {
                    $('#FormWizard_Producto').find('.button-previous').hide();
                } else {
                    $('#FormWizard_Producto').find('.button-previous').show();
                }
                if (current == 2) {
                	displayConfirm();
                }
                if (current >= total) {
                    $('#FormWizard_Producto').find('.button-next').hide();
                    $('#FormWizard_Producto').find('.button-submit').show();
                } else {
                    $('#FormWizard_Producto').find('.button-next').show();
                    $('#FormWizard_Producto').find('.button-submit').hide();
                }
                App.scrollTo($('.page-title'));
            }

            // default form wizard
            $('#FormWizard_Producto').bootstrapWizard({
                'nextSelector': '.button-next',
                'previousSelector': '.button-previous',
                onTabClick: function (tab, navigation, index, clickedIndex) {
                    return false;
                    
                    success.hide();
                    error.hide();
                    if (form.valid() == false) {
                        return false;
                    }
                    
                    handleTitle(tab, navigation, clickedIndex);
                },
                onNext: function (tab, navigation, index) {
                    success.hide();
                    error.hide();
                    var valNull = 0;
                    var valLimit = 0;
                    if (index == 1){

                        var texts= $(".productop_descuento").map(function() {
                            if (parseFloat($(this).val())>100 || parseFloat($(this).val())<0)
                            {
                                valLimit++;
                            }
                        }).get();

                        var texts= $(".productop_titulo").map(function() {
                            if ($(this).val()=="")
                            {
                                valNull++;
                            }
                        }).get();

                        var texts= $(".productop_total_descuento").map(function() {
                            if ($(this).val()=="")
                            {
                                valNull++;
                            }
                        }).get();
                    }
                    
                    if (valLimit>0) {
                        swal("El descuento debe estar entre 0 y 100%", "", "info");
                        form.valid()=false;
                        return false;
                    }


                    if (valNull>0) {
                        swal("Ingrese Todos los Titulos y Precios del Producto", "", "info");
                        form.valid()=false;
                        return false;
                    }

                    if (form.valid() == false) {
                        return false;
                    }

                    handleTitle(tab, navigation, index);
                },
                onPrevious: function (tab, navigation, index) {
                    success.hide();
                    error.hide();

                    handleTitle(tab, navigation, index);
                },
                onTabShow: function (tab, navigation, index) {
                    var total = navigation.find('li').length;
                    var current = index + 1;
                    var $percent = (current / total) * 100;
                    $('#FormWizard_Producto').find('.progress-bar').css({
                        width: $percent + '%'
                    });
                }
            });

            $('#FormWizard_Producto').find('.button-previous').hide();
            $('#FormWizard_Producto').find('.button-submit').hide();
            $(document).on('click','#FormWizard_Producto .button-submit',function () { 
            	
            	 success.hide();
                 error.hide();

                 if (form.valid() == false) {
                     return false;
                 }else
            	 {
                    $('#FormProducto')[0].submit();
                    return true;
            	 }
                
            }).hide();
            
        }

    };

}();

jQuery(document).ready(function() {
	'use strict';
    FormWizard.init();
});
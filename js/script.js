/**
 *  
 *  Author     : josuelmm92@gmail.com
 *  Description: Script personalziados
 *
 **/
'use strict';
/* ESTABLECER A CADA SELECT UNA OPTION VACIA EN EL INICIO */
 $('.seleccion').prepend('<option value="" selected="selected">[Elija]</option>');
 $('.seleccion_profesional').prepend('<option value="" selected="selected">[Seleccione Doctor]</option>');

/* SCRIPT PARA LAS TABLAS (las que contiene la clase tabla-consulta) USANDO DATATABLE */
var tablaconsulta = $('.tabla-consulta').DataTable({
      "order": [
      [0, 'asc']
      ],
      "lengthMenu": [
      [10, 15, 20, -1],
      [10, 15, 20, "Todos"]
      ],
      "pageLength": 10,
      "language":
      {
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ Registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "No existen Registros",
        "sInfo":           "Mostrando Registros del _START_ al _END_ de un total de _TOTAL_ Registros",
        "sInfoEmpty":      "Mostrando Registros del 0 al 0 de un total de 0 Registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ Registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
          "sFirst":    "Primero",
          "sLast":     "Ãšltimo",
          "sNext":     "Siguiente",
          "sPrevious": "Anterior"
        },
        "oAria": {
          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
});

 function Notificacion(tipo,mensaje)
 {
 	$.toast({
	    heading: '',
	    text: mensaje,
	    showHideTransition: 'fade',
	    icon: tipo,
    	position: 'bottom-right'
	});
 }

 function valBetweenAltMin(v, min, max) {
      return (val > min) ? ((val < max) ? val : max) : min;
}

 function VerImagenInputFile(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }           
            var img=document.getElementById("thumbnail");            
            img.file = file;    
            var reader = new FileReader();
            reader.onload = (function(aImg) { 
                return function(e) { 
                    aImg.src = e.target.result; 
                }; 
            })(img);
            reader.readAsDataURL(file);
    }    
}


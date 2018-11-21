var fecha = new Date();
var fecha_hoy = fecha.getFullYear() + "-" + (fecha.getMonth() +1) + "-" + fecha.getDate();

$('.form_datetime').datetimepicker({
    weekStart: 1,
    todayBtn:  1,
	autoclose: 1,
	todayHighlight: 1,
	startView: 2,
	forceParse: 0,
	language: 'es',
    showMeridian: 1
});
$('.hasta_hoy').datetimepicker({
    weekStart: 1,
	format: 'dd/mm/yyyy',
    todayBtn:  1,
	autoclose: 1,
	todayHighlight: 1,
	startView: 2,
	minView: 2,
	language: 'es',
	forceParse: 0,
	endDate: fecha_hoy
});
$('.fecha').datetimepicker({
    weekStart: 1,
	format: 'dd/mm/yyyy',
    todayBtn:  1,
	autoclose: 1,
	todayHighlight: 1,
	startView: 2,
	minView: 2,
	language: 'es',
	forceParse: 0
});
$('.fecha_tiempo').datetimepicker({
    weekStart: 1,
    todayBtn:  1,
	autoclose: 1,
	todayHighlight: 1,
	startView: 1,
	minView: 0,
	maxView: 1,
	language: 'es',
	forceParse: 0
});
$(function () {
	$('#datetimepicker1').datetimepicker({
		language: 'es'
	});
});
 $(function() {
	    // Bootstrap DateTimePicker v3
	    $('#datetimepicker4').datetimepicker({
	      pickTime: false,
		  language: 'es'
	    });
	    // Bootstrap DateTimePicker v4
	    $('#datetimepicker3').datetimepicker({
	      format: 'DD/MM/YYYY',
		  language: 'es'
	    });
	});

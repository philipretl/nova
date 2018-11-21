function format(state) {
    if (!state.id) return state.text; 
    return "<img class='flag' src='img/flags/" + state.id.toLowerCase() + ".png'/> &nbsp;" + state.text;
}

var placeholder = "[Elija]";
$('.select2, .select2-multiple').select2({
	theme: "bootstrap",
    language: 'es',
    escapeMarkup: function(markup) {
        return markup;
    }
});
$("#selitemIcon").select2({
	theme: "bootstrap",
	templateResult: format,
    formatSelection: format,
    escapeMarkup: function(m) {
        return m;
    }
});
$('.select2-allow-clear').select2({
	theme: "bootstrap",
    allowClear: true,
    placeholder: placeholder
});
$( "button[data-select2-open]" ).click( function() {
	$( "#" + $( this ).data( "select2-open" ) ).select2( "open" );
});

$( ":checkbox" ).on( "click", function() {
	$( this ).parent().nextAll( "select" ).prop( "disabled", !this.checked );
});




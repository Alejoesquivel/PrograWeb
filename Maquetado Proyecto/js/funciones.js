// JavaScript Document

$(document).ready(function(){
	$('input:radio[name=opciones]').change(function () {
            if ($("input[name='opciones']:checked").val() == "adoptar") {
				$("#form_adopcion").show(500);
            } else {
				$("#form_adopcion").hide(500);
			}
            if ($("input[name='opciones']:checked").val() == "consulta") {
				$("#form_consulta").show(500);
            } else {
				$("#form_consulta").hide(500);
			}
        });
});
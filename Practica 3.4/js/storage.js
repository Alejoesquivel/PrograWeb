function Registra(){
	localStorage.setItem("Nombre",$("#usuario").val());
	console.log(localStorage.getItem("Nombre"));
}

function Cerrar(){
	localStorage.clear();
	location.reload();
}

$(document).ready(function(){
	localStorage.getItem("Nombre");
	if(localStorage.getItem("Nombre")!=null){
	$('#Bienvenido').html("<h1>Bienvenido "+localStorage.getItem("Nombre")+"</h1>");
	$("#Registro").hide();
	} else {
	$("#Cerrar_sesion").hide();
	}
});

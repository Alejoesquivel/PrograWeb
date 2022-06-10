// JavaScript Document
$(function(){
	
	$("#modificar").click(function(){
		let nombrec = $("#nombre").val();
        let passwordc = $("#password").val();
        let passwordcc = $("#passwordconfirm").val();
         
		if(nombrec == "" || passwordc == "" || passwordc == ""){
            $("#error2").text("Debes llenar los campos vacios");
        }else{
            $("#error2").text("");
            $( "#formulario" ).submit();
        }     
		
        if(passwordc!=passwordcc && passwordc == "" || passwordc == "" ){
            $("#error").text("Error las contraseñas no coinciden");
        }else{
            $("#error").text("");
            $( "#formulario" ).submit();
        }       
    });
	
	$("#registrar").click(function(){
        let password1 = $("#password1").val();
        let password2 = $("#password2").val();
    
        if(password1!=password2){
            $("#error").text("Error las contraseñas no coinciden");
        }else{
            $("#error").text("");
            $( "#formulario" ).submit();
        }       
    });
	
	$("#citar1").click(function(){
		let nombreadop = $("#nombreadop").val();
        let correoadop = $("#correoadop").val();
        let tipomascotaadop = $("#tipomascotaadop").val();
        let fechaadop = $("#fechaadop").val();
         
		if(nombreadop == "" || correoadop == "" || tipomascotaadop == "" || fechaadop ==""){
            $("#error").text("Debes llenar los campos vacios");
        }else{
            $("#error").text("");
            $( "#form_adopcion" ).submit();
        }     
    });
	
	$("#citar2").click(function(){
		let nombrecon = $("#nombrecon").val();
        let correocon = $("#correocon").val();
		let razoncon = $("#razoncon").val();
        let tipomascotacon = $("#tipomascotacon").val();
		let edadcon = $("#edadcon").val();
        let fechacon = $("#fechacon").val();
         
		if(nombrecon == "" || correocon == "" || razoncon == "" || tipomascotacon == "" || edadcon == "" || fechacon ==""){
            $("#error2").text("Debes llenar los campos vacios");
        }else{
            $("#error2").text("");
            $( "#form_consulta" ).submit();
        }     
    });
	
	
});

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





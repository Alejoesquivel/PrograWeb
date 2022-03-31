// JavaScript Document
window.load = token();

function token(){
	var min = 32;
	var max = 128;
	var tokenFinal = "";
	for (i=0;i<10;i++){
		var aleatorio = Math.floor(Math.random()*(max-min+1)+min);
		var ascii = String.fromCharCode(aleatorio);
		tokenFinal += ascii;
	}
	document.getElementById("token").value = tokenFinal;
}

function calcularRFC(){
    var nombre = document.getElementById("nombre");
    var nombreValue = nombre.value;
	
	var apellidoP = document.getElementById("apellidoP");
	var apellidoPValue = apellidoP.value;
	var apellidoPLength = apellidoPValue.length;
	var apellidoPVocal = "";
	var contador = 0;
	for (j=0;j<apellidoPLength;j++){
		if(apellidoPValue.charAt(j)=="a" && contador ==0){
			apellidoPVocal = apellidoPValue.charAt(j);
			contador++;
		}
		if(apellidoPValue.charAt(j)=="e" && contador ==0){
			apellidoPVocal = apellidoPValue.charAt(j);
			contador++;
		}
		if(apellidoPValue.charAt(j)=="i" && contador ==0){
			apellidoPVocal = apellidoPValue.charAt(j);
			contador++;
		}
		if(apellidoPValue.charAt(j)=="o" && contador ==0){
			apellidoPVocal = apellidoPValue.charAt(j);
			contador++;
		}
		if(apellidoPValue.charAt(j)=="u" && contador ==0){
			apellidoPVocal = apellidoPValue.charAt(j);
			contador++;
		}
	}
	
	var apellidoM = document.getElementById("apellidoM");
	var apellidoMValue = apellidoM.value;
	
	var fecha = document.getElementById("fecha");
	var fechaValue = fecha.value;
	
	let rfc = document.getElementById("rfc");
	
	var rfcFinal = apellidoPValue.charAt(0).toUpperCase()+apellidoPVocal.toUpperCase()+apellidoMValue.charAt(0).toUpperCase()+nombreValue.charAt(0).toUpperCase()+fechaValue.charAt(2)+fechaValue.charAt(3)+fechaValue.charAt(5)+fechaValue.charAt(6)+fechaValue.charAt(8)+fechaValue.charAt(9);
	
	document.getElementById("rfc").value = rfcFinal;
	rfc.type="text";
}
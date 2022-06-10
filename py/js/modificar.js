// JavaScript Document	

$(document).ready(function(){	
	document.getElementById('password').addEventListener('input', function(evt) {
    const campo = evt.target,
    valido = document.getElementById('passwordOK'),
    regex = /^(?=.*\d)(?=.*[a-záéíóúüñ]).*[A-ZÁÉÍÓÚÜÑ].*[!"#$%&/()=?¡'¿]/;
	var password = $("#password").val();
	let boton = document.getElementById("modificar");
    if (regex.test(campo.value)  && password.length >=8 && password.length <=15) {
      	valido.innerText = "Formato Correcto";
		boton.removeAttribute("hidden");
    } else {
      valido.innerText = "Formato Incorrecto\n Se necesita:\n Entre 8 y 15 caracteres\n 1 Mayúscula\n 1 Minúscula \n 1 Digito \n 1 Caracter Especial !#$%&/)('=?¡¿";
		boton.setAttribute("hidden", "hidden");
    }
  });	
});
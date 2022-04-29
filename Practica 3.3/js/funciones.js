// JavaScript Document
var carrito = "";
var costofinal = 0;
var costotipo = 0;
var contador = 0;
var costodesc = "";

function Agregar(){
	let numerotaller;
	numerotaller = $("#talleres").val();
	if(numerotaller == 1){
		carrito = carrito + "Python $100 \n";
		costofinal = costofinal + 100;
		$("#talleres option[value='1']").hide();
	} else if (numerotaller == 2){
		carrito = carrito + "Flutter $120 \n";
		costofinal = costofinal + 120;
		$("#talleres option[value='2']").hide();
	} else if (numerotaller == 3) {
		carrito = carrito + "MongoDB $80 \n";
		costofinal = costofinal + 80;
		$("#talleres option[value='3']").hide();
	}
	if (contador == 0){
		costofinal = costofinal + costotipo;
		contador++;
	}
	$("#carrito").val(carrito);
	$("#costo").val(costofinal);
}

$(document).ready(function(){
	if ($("input[name='tipo']:checked").val() == "estudiante") {
				$("#precio").val("$100");
				costotipo = 100;
            }
	$('input:radio[name=tipo]').change(function () {
            if ($("input[name='tipo']:checked").val() == "profesional") {
				$("#precio").val("$200");
				costotipo = 200;
            }
            if ($("input[name='tipo']:checked").val() == "estudiante") {
				$("#precio").val("$100");
				costotipo = 100;
            }
			if ($("input[name='tipo']:checked").val() == "profesor") {
				$("#precio").val("$150");
				costotipo = 150;
            }
        });
	$("#descuento").keyup(function(){
	if($("#descuento").val() == "DSC2022"){
		costodesc = costofinal + "\n-100 \n---- \n" +(costofinal-100);
		$("#costo").addClass("desc");
		$("#costo").val(costodesc);
	}
	});
	
	$("#limpiar").click(function(){
	carrito = "";
	costofinal = 0;
	costotipo = 0;
	contador = 0;
	costodesc = "";
	$("#talleres option[value='1']").show();
	$("#talleres option[value='2']").show();
	$("#talleres option[value='3']").show();
	$("#costo").removeClass("desc");
	});
});



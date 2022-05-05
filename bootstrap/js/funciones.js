//Ejemplo de JQuery

function agregar(){
    //let taller = $("#taller").val()
    //let texto = $("#taller").text()
    let texto = "";
    $("#taller option").each(function(i, e){
       if($(e).is(":selected")){
           texto = $(e).text();
           $(e).hide();
       } 
    });
    
    $("#carrito").append(texto+"\n");
    
    texto = texto.split('$')
    
    $("#tabla").append("<tr><td>"+texto[0]+"</td><td>"+texto[1]+"</td></tr>");
}

$(function(){
    
    $("[name=tipo]").change(function(){
        let valor = $(this).val();
        $("#costo").val(valor);
    });
    
    $("#agregar").click(agregar);
    
    $("#descuento").change(function(){
        let descuento = $(this).val()
        let mensaje = "";
       if(descuento == "DSC2022"){
           mensaje="10% descuento";
       }
        else{
            mensaje="Cupón inválido";
        }
        
        $("#carrito").append(mensaje);
    });
    
});
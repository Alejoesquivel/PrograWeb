/*Ejemplo de manejo de JQuery*/

function mover(){
    $("h2").css("text-align","center");
    $("h1").toggle(3000);
}

$(document).ready(function(){
    //alert("Entrando");
    
    $("p").hide();
    
    $("#calcular").click(function(){
        let nombre= $("#nombre").val();
        //alert(nombre);
        //$("#lateral").text(nombre);
        $("#lateral").html("<h1>"+nombre+"</h1>");
        $("#titulo").slideToggle(3500);
    });
    
    $("#titulo").click(function(){
        //alert("Entrando");
        //$(this).hide("slow");
        //$(this).hide(5000);
        $("p").show(5000);
    });
    
    $("p").mouseover(mover);
    
    $("#contra").keyup(function(){
        
        $("#lateral").text($(this).val());
    });
    
    $("#personales").submit(function(e){
        //e.preventDefault();
        let nombre = $("#nombre").val()
        
        if(nombre==""){
            //alert("Debes colocar un nombre!!");
            $("#nombre").attr("placeholder", "Debes poner un nombre").focus().addClass("error");
            return false;
        }
    })
});
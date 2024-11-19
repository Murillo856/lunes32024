$(function () {
    console.log("Semana 10");

    //Seleccionamos el DOM

    console.log($("#nombre").val()); // ID

    console.log($("h2")); // Por etiqueta

    console.log($(".titulo")); //Clase

    $("#miBoton").on("click", function () {
        $("#saludo").html("Hola nuevo saludo");
        $("h2").removeClass("titulo");
        $("h2").addClass("titulo2");
        $("#saludo").css("color","orange");
        $("#imagen").attr("src","images.jpg");
    });
});
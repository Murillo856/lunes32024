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

    console.log("Semana 11");


    $("#aparecer").on("click", function () {
        $("#miCuadrado").fadeIn();
    });
    $("#desaparecer").on("click", function () {
        $("#miCuadrado").fadeOut();
    });

    $("#alternar").on("click", function () {
        $("#miCuadrado").toggleClass("red");
    });

    $("#animar").on("click", function () {
        $("#miCuadrado").animate({
            width: "500px",
            height: "500px",
            opacity: 0.8
        }, 1000);
    });


    $("#inicio").on("click", function () {
        $("#contenido").prepend("<h3>Agregar al inicio</h3>");
    });
    $("#final").on("click", function () {
        $("#parrafo").append("<br>Agregar al final");
    });
    $("#tareaFinal").on("click", function () {
        $("#listaTarea").append("<li>"+$("#tarea").val()+"</li>");
        $("#tarea").val("");
    });

    
});
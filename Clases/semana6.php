<!DOCTYPE html>
<html>

<head>
    <title>Semana6</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h1>Hola semana 6</h1>
<?php 
    $edad = 50;
    $edad2 = 60;
    $total = $edad + $edad2;
    echo $total."<br>";

    $nombre = "Karol ";
    $edad = 34;

    echo "Mi nombre es ".$nombre." , mi edad es de ".$edad."<br>";

    $valor = 5;
    $valor2 = "5";
    echo "------------  == o === ??????? -------------------<br> ";
    if($valor == $valor2){
        echo "El valor de las variables son iguales"."<br>";
    }

    if($valor === $valor2){
        echo "El valor y el tipo de datos de las variables son iguales"."<br>";
    } else {
        echo "El valor o el tipo de datos de las variables no son iguales"."<br>";
    }
    echo "------------  != o !== ??????? -------------------<br> ";
    if($valor != $valor2){
        echo "El valor de las variables son diferentes"."<br>";
    }

    if($valor !== $valor2){
        echo "El valor o el tipo de datos de las variables son diferentes"."<br>";
    } else {
        echo "El valor y el tipo de datos de las variables son iguales"."<br>";
    }
    echo "------------ > o < o <= o >= -------------------<br> ";
    $edad = 10;
    if($edad >= 18){
        echo "Es un adulto <br>";
    } else {
        echo "Es menor de edad <br>";
    }

    echo "------------ && o ||  -------------------<br> ";

    $fruta = "pera";
    $esFruta = true;

    if($fruta == "manzana" && $esFruta){ // false X
        echo "Es una fruta de manzana<br>";
    }

    if(($fruta == "manzana" && $esFruta) || $fruta == "pera"){
        echo "Es una manzana fruta o es pera<br>";
    }

    if(!($fruta == "manzana")){ // F  -> T
        echo "Es una fruta que no es manzana<br>";
    }

    $contador = 5;

    while($contador <= 5){
        echo "Contador es: ".$contador."<br>";
        $contador++;
    }

    do {
        echo "Contador es: ".$contador."<br>";
        $contador++;
    } while($contador <= 5);

    for($i = 0; $i< 20; $i++){
        echo "Contador es: ".$i."<br>";
    }
?>
</body>
</html>
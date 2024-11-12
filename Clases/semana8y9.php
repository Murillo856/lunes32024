<!DOCTYPE html>
<html>

<head>
    <title>Semana 8 Y 9</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Hola semana 8 Y 9</h1>


    <h2>Formulario </h2>
    <form method="post" action="procesar_formulario.php">
        <label>Nombre:</label><input type="text" name="nombre" id="nombre">
        <label>EDAD:</label><input type="number" name="edad" id="edad">
        <button type="submit">Enviar</button>
    </form>
    <?php

    echo "<h2>Semana 8</h2> ";

    echo "------------ array INDEXADO -------------------<br> ";

    $listadoFrutas = array("manzana", "melon", "pera");
    $listadoCarros = ["toyota", "suzuki", "hyndai"];


    echo $listadoFrutas[2] . "<br>";
    echo $listadoCarros[2] . "<br>";



    echo "------------ array ASOCIATIVO -------------------<br> ";

    $estudiante = array("nombre" => "Karol", "apellido" => "Leal", "edad" => 34);
    $estudiante1 = array("nombre" => "Maria", "apellido" => "Perez", "edad" => 20);
    $estudiante2 = array("nombre" => "Juan", "apellido" => "Mora", "edad" => 31);

    $listadoEstudiantes = array(
        $estudiante,
        $estudiante1,
        $estudiante2,
        array("nombre" => "Paola", "apellido" => "Fernandez", "edad" => 25)
    );

    print_r($listadoEstudiantes);
    echo "<br>";



    // Arreglo multidimensional   arreglo as key  valor
    foreach ($listadoEstudiantes as $index => $estudiante) {
        // index es el numero de la posicion del estudiante.
        // estudiante es el Arreglo de estudiantes -> nombre, apellido, edad
        //echo " Estudiante numero : " . $listadoEstudiantes[$index]["edad"] . "<br>";
        echo " Estudiante numero : " . $index . "<br>";
        foreach ($estudiante as $key => $valor) {
            echo $key . " => " . $valor . "<br>";
        }
        echo "<br>";
    }
    // listado informacion de arreglo?

    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
        <?php

        foreach ($listadoEstudiantes as $estudiante) {
            if ($estudiante["edad"] >= 25) {
                echo "<tr><td>" . $estudiante["nombre"] . "</td><td>" . $estudiante["apellido"] . "</td><td>" . $estudiante["edad"] . "</td></tr>";
            }
        }

        ?>
    </table>

    <?php


    for ($i = 0; $i < count($listadoEstudiantes); $i++) {
        echo $listadoEstudiantes[$i]["nombre"] . " " . $listadoEstudiantes[$i]["edad"] . "<br>";
    }

    echo "<br>Archivos<br>";
    /*
        $archivo = fopen("miarchivo.txt","w");
        fwrite($archivo,"este es mi primer archivo en php.");
        fclose($archivo);
*/
    try {
        $archivo = fopen("miarchivo.txt", "r");
        if(!$archivo){
            throw new Exception("No se puede abrir el archivo");
        }
        while (!feof($archivo)) {
            $linea = fgets($archivo);
            echo $linea . "<br>";
        }
        fclose($archivo);
    } catch(Exception $e){
        echo "Se ha producido un error";
    }



    ?>
</body>

</html>
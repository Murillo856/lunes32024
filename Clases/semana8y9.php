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



    echo "<br>Semana 9<br>";
    echo "<br>--------------------- CRUD MYSQL ----------------------------------<br>";

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "matricula";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error){
        die("Conexio fallida");
    } else {
        echo "conexion perfecta";
    }



    // INSERT -> Create CRUD
    /*
    $query = "INSERT INTO usuario(nombre, usuario, clave, rol) VALUES ('Karol Leal','kleal','12345','admin')";

    if($conn->query($query) ==  TRUE){
        echo "Registro guardado exitosamente <br>";
    } else {
        echo "Error al agregar registro <br>";
        
    }
*/
    // select -> READ CRUD
    $sql = "SELECT * FROM usuario WHERE 1";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "ID: ".$row["id"]. "nombre: ".$row["nombre"]. "usuario: ".$row["usuario"]. "rol: ".$row["rol"]."<br>";
        }
    }
    // Update -> update CRUD
    $query = "UPDATE usuario SET nombre='Karol Leal R' WHERE id = 1";

    if($conn->query($query) ==  TRUE){
        echo "update  exitosamente <br>";
    } else {
        echo "Error al actualizar registro <br>";
        
    }

        // delete -> delete CRUD
        $query = "delete from usuario WHERE id = 2";

        if($conn->query($query) ==  TRUE){
            echo "delete  exitosamente <br>";
        } else {
            echo "Error al borrar registro <br>";
            
        }

        echo "<br>--------------------- HASHING ----------------------------------<br>"; 

        $clave = "12345";

        $clave_encriptada = password_hash($clave,PASSWORD_BCRYPT);

        //echo $clave_encriptada;

        //$2y$10$.7FhzNHneSYYFhOfn3XQ2.bgzNp3EjxYZ/RI7j9jL3bj96q3ILOle
        //$2y$10$DlkZYD1fZeVXfykIJkAZZe/hNCaAqg0AQGaK4K48gZZwWNRh5TbPu
        //$2y$10$GozJHpJcWrZH0aplQM6Dzu66o3gwCnkSJnvxB3qdGXfG/2xQNUUbS

        if(password_verify($clave, '$2y$10$DlkZYD1fZeVXfykIJkAZZe/hNCaAqg0AQGaK4K48gZZwWNRh5TbPu4' )){
            echo "si es lo mismo";
        } else {
           echo  "no es lo mismo";
        }
    ?>
</body>

</html>
<?php 

include("db.php");
session_start();

$sql = "SELECT * FROM usuario WHERE usuario = '".$_POST["username"]."'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        if($_POST["username"] ==  $row["usuario"] && password_verify( $_POST["password"], $row["clave"])){
            $_SESSION["username"] = $row["usuario"];
            $_SESSION["rol"] = $row["rol"];
            header("Location: index.php");
        } else {
            echo "Clave incorrecta!";
        }
    }
} else {
    echo "El usuario no existe";
}

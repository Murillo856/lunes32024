<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {

        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];

        $name = $_POST['name'];
        $grade = $_POST['grade'];
        $age = $_POST['age'];

        $uploadDir = 'vouchers/';
        $destPath = $uploadDir . $fileName;

        if (move_uploaded_file($fileTmpPath, $destPath)) {

            $query = "INSERT INTO registration( name, age, grade, voucher) VALUES ('$name','$age','$grade','$destPath')";

            if ($conn->query($query) ==  TRUE) {
                echo "<script type='text/javascript'>alert('Registro guardado exitosamente!');</script>";
                header('Location: index.php');    
            } else {
                echo "Error al agregar registro <br>";
            }
        } else {
            echo "<p>Error al subir el archivo.</p>";
        }
    } else {
        echo "<p>Error: " . $_FILES['file']['error'] . "</p>";
    }
}

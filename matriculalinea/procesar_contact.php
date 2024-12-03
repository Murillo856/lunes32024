<?php

include('db.php');

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['contact'];
$email = $data['email'];
$subject = $data['subject'];
$message = $data['message'];

$query = "INSERT INTO contact( name, email, subject, message) VALUES ('$name','$email','$subject','$message')";
try {
    if ($conn->query($query) ==  TRUE) {
        echo json_encode(["status" => "00", "message" => "Mensaje enviado correctamente"]);
    } else {
        echo json_encode(["status" => "99", "message" => "Mensaje no pudo ser enviado"]);
    }
} catch(Exception $e){
    echo json_encode(["status" => "99", "message" => "Mensaje no pudo ser enviado"]);
}


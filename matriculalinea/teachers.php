<?php
include('db.php');
$data = json_decode(file_get_contents("php://input"), true);

switch($data['action']){
    case 'add': 
        $name = $data["name"];
        $query = "INSERT INTO teachers( name) VALUES ('$name')";
        try {
            if ($conn->query($query) ==  TRUE) {
                echo json_encode(["status" => "00", "message" => "Se agrego correctamente el profesor","name" =>$name ]);
            } else {
                echo json_encode(["status" => "99", "message" => "Error al guardar al profesor"]);
            }
        } catch(Exception $e){
            echo json_encode(["status" => "99", "message" => "Error al guardar al profesor"]);
        }
        break;
    case 'delete':

        break;
    
    case 'get':
        $sql = "SELECT * FROM teachers";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $teachers = [];
            while ($teacher = $result->fetch_assoc()) {
                $teachers[] = ["name" => $teacher["name"]];
            }
            echo json_encode(["status"=> "00", "teachers" => $teachers]);
        } else {
            echo json_encode(["status"=> "99", "teachers" => []]);
        }
        break;

    case 'update':

        break;
}
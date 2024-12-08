<?php
include_once 'config/db.php';

if (isset($_POST['action']) && isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'add':
            $bookId = $_POST['bookId'];
            $userName = $_POST['userName'];
            $query = "INSERT INTO reservations (book_id, user_name) VALUES ('" . $bookId . "','" . $userName . "')";
            $conn->query($query);

            $query = "UPDATE books SET available = 0 WHERE id ='" . $bookId . "'";
            if ($conn->query($query) ==  TRUE) {
                echo json_encode(["success" => true, "message" => "Registro exitosamente guardado"]);
            } else {
                echo json_encode(["success" => false, "message" => "Error al guardar el mensaje"]);
            }
            break;
        case 'getAll':
            $sql = "SELECT * FROM books where available != 0";
            $result = $conn->query($sql);
            $list = [];
            if ($result->num_rows > 0) {
                while ($teacher = $result->fetch_assoc()) {
                    $list[] = $teacher;
                }
            }

            echo json_encode(["status" => true, "books" => $list]);
            break;
    }
}

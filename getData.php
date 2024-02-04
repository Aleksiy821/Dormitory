<?php

include('./session_manager.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webhouse";
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8mb4");
$id = $_GET["id_card"];
if ($conn->connect_error) {
    $response = array('error' => 'Ошибка подключения: ' . $conn->connect_error);
} else {
    $sql = "SELECT `id_card`, `full_name`, `room_number`, `what_is_on_a_person` FROM `residents` WHERE id_card = '$id'";
    $result = $conn->query($sql);

    if ($result == true) {
        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        

        $conn->close();
        $response = array('data' => $data);
    } else {
        $response = array('data' => 'Данных не обнаружено!');
    }
}

header('Content-Type: application/json');
$json = json_encode($response);

if ($json === false) {
    echo json_encode(array('error' => 'Ошибка конвертации в JSON: ' . json_last_error_msg()));
} else {
    echo $json;
}
?>
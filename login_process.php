<?php
    include("./db_connection.php");

    $id_card = $_POST['id_card'];

    $sql = "SELECT * FROM residents WHERE id_card = '$id_card'";

    $result = $db_connect->query($sql);

    if ($result->num_rows > 0) {
        header('Location: ./add_news.php');
    } else {
        echo "Неверный ID карты";
    }

    $db_connect->close();
?>
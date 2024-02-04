<?php
    include("./db_connection.php"); 

    $id_category = $_POST['id_category'];
    $title = $_POST['title'];
    $small_text = $_POST['small_text'];
    $text = $_POST['text'];
    $author = $_POST['author'];

    $sql = "INSERT INTO news (id_category, title, small_text, text, author)
    VALUES ('$id_category', '$title', '$small_text', '$text', '$author')";

    if ($db_connect->query($sql) === TRUE) {
        echo "Новость успешно добавлена";
    } else {
        echo "Error: " . $sql . "<br>" . $db_connect->error;
    }

    $db_connect->close();
?>

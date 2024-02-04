<?php
    include("./db_connection.php");

    if(isset($_GET['id'])){
        $sqlQuery = "SELECT * FROM `news` WHERE `id` = " . $_GET['id'];
        $result = $db_connect->query($sqlQuery);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<h1>' . $row['title'] . '</h1>';
                echo '<p>' . $row['text'] . '</p>';
                echo '<h3>Автор: ' . $row['author'] . '</h3>';
            }
        } else {
            echo "News not found";
        }
    }else{
        echo "News not found";
    }
    $db_connect->close();
?>

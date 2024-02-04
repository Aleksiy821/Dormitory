<?php
    include("./db_connection.php");
    if(isset($_GET['cat_id'])){
        $sqlQuery = "SELECT * FROM `news` WHERE `id_category` = " . $_GET['cat_id'];
    }else{
        $sqlQuery = "SELECT * FROM `news`";
    }
    $result = $db_connect->query($sqlQuery);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<h1>' . $row['title'] . '</h1>';
            echo '<p>' . $row['small_text'] . '</p>';
            echo '<h3>Автор: ' . $row['author'] . '</h3>';
            echo '<a href="./news.php?id=' . $row['id'] . '">Перейти к новости</a>';
            echo '<hr/>';
        }
    } else {
        echo "0 results";
    }
    $db_connect->close();
?>

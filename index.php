<?php
    include("./db_connection.php"); 
    $sql = "SELECT * FROM `category` ORDER BY `name` ASC";
    $result = $db_connect->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<a href="/news_list.php?cat_id=' . $row['id'] . '">' . $row['name'] . '</a><br>';
        }
    } else {
        echo "0 results";
    }
    $db_connect->close();
?>

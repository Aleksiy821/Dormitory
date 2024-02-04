<!DOCTYPE html>
<html>
<head>
    <title>Добавление новости</title>
</head>
<body>
    <form action="add_news_process.php" method="post">
    <label for="id_category">Категория новостей:</label><br>
<select id="id_category" name="id_category"></br>
<?php
    include("./db_connection.php");

    $sql = "SELECT * FROM `category`";
    $result = $db_connect->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
        }
    } else {
        echo "0 results";
    }
    $db_connect->close();
?>
</select>
       
        <br><label for="title">Заголовок:</label><br>
        <input type="text" id="title" name="title"><br>
        <label for="small_text">Краткий текст:</label><br>
        <textarea id="small_text" name="small_text"></textarea><br>
        <label for="text">Текст:</label><br>
        <textarea id="text" name="text"></textarea><br>
        <label for="author">Автор:</label><br>
        <input type="text" id="author" name="author"><br>
        <input type="submit" value="Добавить новость">
    </form>
</body>
</html>
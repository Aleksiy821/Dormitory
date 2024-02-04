<?php
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DB_NAME", "webhouse");

    $db_connect = new mysqli(HOST, USER, PASSWORD, DB_NAME);

    if ($db_connect->connect_error) {
        die("Ошибка подключения: " . $db_connect->connect_error);
    }
    if (!$db_connect->set_charset("utf8")) {
        printf("Ошибка при загрузке набора символов utf8: %s\n", $db_connect->error);
    }
?>

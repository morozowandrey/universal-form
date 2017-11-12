<?php

$connection = new mysqli("localhost", "Andrew", "LRkJEvqukgaTz7Je", "test_form");

if ($connection->connect_errno) {
    printf("Не удалось подключиться: %s\n", $connection->connect_error);
    exit();
} else {
    $result = $connection->query("SELECT 'Привет, дорогой пользователь MySQL!' AS _message FROM DUAL");
    $row = $result->fetch_assoc();
//    echo htmlentities($row['_message']);
}

?>
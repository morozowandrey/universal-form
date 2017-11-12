<?php

$method = $_SERVER['REQUEST_METHOD'];

include_once ("connection.php");

if ( $method === 'POST' ) {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);

    mysqli_query($connection,"INSERT INTO test_form (`id`, `name`, `email`, `telephone`) VALUES (NULL, '$name', '$email', '$phone');");

    mysqli_close($connection);

}

?>
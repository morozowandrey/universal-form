<?php

$method = $_SERVER['REQUEST_METHOD'];

include_once ("connection.php");

if ( $method === 'POST' ) {

    $name = mysqli_real_escape_string($connection, trim($_POST["name"]));
    $email = mysqli_real_escape_string($connection, trim($_POST["email"]));
    $phone = mysqli_real_escape_string($connection, trim($_POST["phone"]));

    //validation
    if( !empty($name) && !empty($email) && !empty($phone) ){
        $data = mysqli_query($connection,"SELECT * FROM test_form WHERE name = '{$name}' and email = '{$email}'");

        if(mysqli_num_rows($data) == 0){
            mysqli_query($connection,"INSERT INTO test_form (`id`, `name`, `email`, `telephone`) VALUES (NULL, '$name', '$email', '$phone');");
            mysqli_close($connection);
            echo 'Я запишу это для тебя (´• ω •`)';
        } else {
            echo 'Такая запись уже существует';
        }
    }else{
        echo 'fuck off (・`ω´・) fill all inputs bitch!';
    }
}

?>
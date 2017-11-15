<?php

include_once ("connection.php");

if($_POST)
{
    //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

        $output = json_encode(array(
            'type'=>'error',
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output);
    }

    $name	= filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email	= filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone	= filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);

    //php validation
    if(strlen($name)<2){
        $output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty'));
        die($output);
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email'));
        die($output);
    }
    if(!filter_var($phone, FILTER_SANITIZE_NUMBER_FLOAT)){
        $output = json_encode(array('type'=>'error', 'text' => 'Enter only digits in phone number'));
        die($output);
    }

    $data = mysqli_query($connection, "SELECT name, email, telephone FROM test_form WHERE name = '{$name}' and email = '{$email}' and telephone = '{$phone}'");
    if (mysqli_num_rows($data) == 0) {
        mysqli_query($connection, "INSERT INTO test_form (`id`, `name`, `email`, `telephone`) VALUES (NULL, '$name', '$email', '$phone');");
        mysqli_close($connection);
        $output =  json_encode(array('type'=>'success', 'text' => '(´• ω •`) kiki'));
        die($output);
    } else {
        $output = json_encode(array('type'=>'success', 'text' => 'Duplicated'));
        die($output);
    }
}
?>
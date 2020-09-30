<?php

    require_once('db.php');

    $first_name = $_POST['name'];
    $last_name = $_POST['last-name'];
    $name = $first_name.' '.$last_name;
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $study_level = $_POST['study-level'];


    //$fundamental = $_POST['fundamental'];

    echo $name;
    echo '<br>';
    echo $email;
    echo '<br>';
    echo $phone;
    echo '<br>';
    echo $message;
    echo '<br>';
    echo $study_level;


    $objDb = new db();
    $link = $objDb->connect_mysql();

    $sql = "insert into alunos(name, email, number, message, study_level)values('$name', '$email', '$phone', '$message', '$study_level')";

    if( mysqli_query($link, $sql)){
        echo '';
    } else {
        echo 'erro ao registrar o usuario';
    }
?>
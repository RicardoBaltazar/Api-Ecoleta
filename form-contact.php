<?php

$name = $_POST['name'];
$last_name = $_POST['last-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//$fundamental = $_POST['fundamental'];

if($_POST['fundamental'] == 'on'){
    $fundamental = 'ensino fundamental';
} else {
    //unset($fundamental);
    $fundamental = '';
}

if($_POST['medio'] == 'on'){
    $medio = 'Ensíno Médio';
} else {
    //unset($medio);
    $medio = '';
}

if($_POST['vestibular'] == 'on'){
    $vestibular = 'Vestibular';
} else {
    $vestibular = '';
}

echo $name;
echo '<br>';
echo $last_name;
echo '<br>';
echo $email;
echo '<br>';
echo $phone;
echo '<br>';
echo $message;

echo '<br>';
echo '<br>';
echo $fundamental;
echo '<br>';
echo $medio;
echo '<br>';
echo $vestibular;


?>
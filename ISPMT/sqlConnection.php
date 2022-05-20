<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ispmt';

$connection = mysqli_connect($host, $user, $pass, $db);

if($connection->connect_error){
    die ("Connection error".$connection->connection_error);
}

// echo "Connection Success";
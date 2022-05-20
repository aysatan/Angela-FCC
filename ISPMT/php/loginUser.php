<?php

include('../sqlConnection.php');

$username = $_POST['username'];
$password = $_POST['password'];
$password = crypt($password, 'slt');

$query = "SELECT * FROM fans WHERE username='$username' AND `password`='$password'";

$login = mysqli_query($connection, $query);

$cek = mysqli_num_rows($login);

if($cek > 0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";

    header("location: ../index.php");
}else{
    echo "No Username";
    header("location: ../login.php");
}
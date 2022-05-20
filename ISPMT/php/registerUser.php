<?php

include('../sqlConnection.php');

$username = $_POST['username'];
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$password = $_POST['password'];
$password = crypt($password, 'slt');
$gender = $_POST['gender']; 
$nationality = $_POST['nationality'];
$d = $_POST['date'];
$m = $_POST['month'];
$y = $_POST['year']; 
$dob = "$y-$m-$d";
$dob = date('Y-m-d', strtotime($dob));

$target_dir = '../storage/img/';
$f_name = $_FILES['photo']['name'];
$f_temp = $_FILES['photo']['name'];

move_uploaded_file($f_temp, $target_dir.$f_name);

$query = "INSERT INTO fans VALUES (
    '$username',
    '$fullName',
    '$email',
    '$password',
    '$gender',
    '$nationality',
    '$dob',
    '$f_name'
)";

if(mysqli_query($connection, $query)){
    header("location: ../login.php");
} else{
    echo mysqli_error($connection);
}

mysqli_close($connection);

<?php

include('../sqlConnection.php');

$d = $_POST['date'];
$m = $_POST['month'];
$y = $_POST['year'];
$meetingDate = "$y-$m-$d";
$meetingDate = date('Y-m-d', strtotime($meetingDate));

$startTime = $_POST['startTime'];
$endTime = $_POST['endTime'];

$startTime = date("h:i:a", strtotime($startTime));
$endTime = date("h:i:a", strtotime($endTime));

$venue = $_POST['venue'];
$contactPerson = $_POST['contactPerson'];
$contactNumber = $_POST['contactNumber'];

$query = "INSERT INTO meetings (
    meetingDate,
    startTime,
    endTime,
    venue,
    contactPerson,
    contactNumber
) VALUES (
    '$meetingDate',
    '$startTime',
    '$endTime',
    '$venue',
    '$contactPerson',
    '$contactNumber'
) ";

if(mysqli_query($connection, $query)){
    header("location: ../index.php");
}else{
    echo $connection->error;
}

mysqli_close($connection);
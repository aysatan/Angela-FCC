<?php

include('sqlConnection.php');

$username = $_GET['username'];

$query = "SELECT * FROM fans WHERE username='$username'";

$fan = mysqli_query($connection, $query);

while($fanDetail = mysqli_fetch_assoc($fan)){
    $username = $fanDetail['username'];
    $fullName = $fanDetail['fullName'];
    $email = $fanDetail['email'];
    $password = $fanDetail['password'];
    $gender = $fanDetail['gender'];
    $nationality = $fanDetail['nationality'];
    $dob = $fanDetail['dob'];
    $photo = $fanDetail['photo'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Angela Fans Club Community - View Detail</title>
</head>
<body>
        
        <div class="register-container">
            <?php
            $query = "SELECT photo FROM fans WHERE fullName = '$fullName'";
            $fans = mysqli_query($connection, $query);

            while($d = mysqli_fetch_array($fans)){
            ?> 
                <img src="storage/img/<?php echo $d['photo']?>" alt="photo" width="100px"/>
            <?php }?>

            <table class="register-table">
            <tr>
                <td><label for="fullName">Full Name</label></td>
                <td><?php echo $fullName?><br></td>
            </tr>

            <tr>
                <td><label for="email">Email</label></td>
                <td><?php echo $email?> <br></td>
            </tr>

            <tr>
                <td><label for="gender">Gender</label></td>
                <td><?php echo $gender?></td>
            </tr>

            <tr>
                <td><label for="dob">Date of Birth</label></td>
                <td><?php echo date_format(date_create($dob), "d M Y")?></td>
            </tr>

            <tr>
                <td><label for="nationality">Nationality</label></td>
                <td><?php echo $nationality?></td>
            </tr>
            </table>
            <div class="right">
                <a href="index.php">Back</a>
            </div>
            
        </div>
</body>
</html>
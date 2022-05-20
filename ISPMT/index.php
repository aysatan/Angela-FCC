<?php

include('sqlConnection.php');

session_start();

if($_SESSION['status'] == ""){
  echo "<script>";
  echo "alert('Please login first!');";
  echo "window.location.replace('login.php');";
  echo "</script>";
}

$username = $_SESSION['username'];

$query = "SELECT * FROM fans WHERE username='$username'";

$show = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($show)){
    $username = $row['username'];
    $fullName = $row['fullName'];
    $email = $row['email'];
    $password = $row['password'];
    $gender = $row['gender'];
    $nationality = $row['nationality'];
    $dob = $row['dob'];
    $photo = $row['photo'];
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Home</title>
  </head>
  <body>
    <div class="navbar">
      <div class="left" id="defaultPage">
        Welcome, <?php echo $fullName?>! <br />

        <?php
            $query = "SELECT photo FROM fans WHERE fullName = '$fullName'";
            $fans = mysqli_query($connection, $query);

            while($d = mysqli_fetch_array($fans)){
          ?> 
        <img src="storage/img/<?php echo $d['photo']?>" alt="photo" width="50px"/>
        <?php }?>

      </div>
      <div class="right">
        <a href="editProfile.php">Edit Profile</a>
        <a href="php/logoutUser.php">Logout</a>
      </div>

      <br /><br /><br /><br />
      <h2 class="table-title">Angela Fans List</h2>
      <table border="1" class="table-member">
        <thead>
          <th>Full Name</th>
          <th>Nationality</th>
          <th>Gender</th>
          <th>Photo</th>
          <th>Action</th>
        </thead>
        <tbody>

          <?php
            $query = "SELECT * FROM fans";
            $fans = mysqli_query($connection, $query);

            while($d = mysqli_fetch_array($fans)){
          ?>   

          <tr>
            <td><?php echo $d['fullName']?></td>
            <td><?php echo $d['nationality']?></td>
            <td><?php echo $d['gender']?></td>
            <td><img src="storage/img/<?php echo $d['photo']?>" alt="photo" width="50px" /></td>
            <td>
              <a href="detail.php?username=<?php echo $d['username']?>" class="view">View Detail</a>
            </td>
          </tr>
          <?php }?>
        </tbody>
      </table>

      <br /><br />
      <div class="right">
        <a href="meetingForm.php">Create meeting schedule</a>
      </div>
      <h2 class="table-title">Angela Fans Club Meeting Schedule</h2>
      <table border="1" class="table-meeting">
        <thead>
          <th>Date</th>
          <th>Time</th>
          <th>Venue</th>
          <th>Contact Person</th>
        </thead>
        <tbody>
        <?php
                
          $query = "SELECT * FROM meetings";
          $meetings = mysqli_query($connection, $query);
                
          while($meeting = mysqli_fetch_array($meetings)){
          ?>
            <tr>
              <td>
                  <?php echo date_format(date_create($meeting['meetingDate']), "d M Y")?>
              </td>
              <td>
                  <?php 
                    echo $meeting['startTime'].'-'.$meeting['endTime'];
                  ?>
              </td>
              <td>
                  <?php echo $meeting['venue']?>
              </td>
              <td>
                  <?php
                    echo $meeting['contactPerson'].'-'.$meeting['contactNumber'];
                  ?>
              </td>
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
    
  </body>
</html>
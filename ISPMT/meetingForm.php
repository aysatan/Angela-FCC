<?php

session_start();

if($_SESSION['status'] == ""){
    echo "<script>";
    echo "alert('Please login first!');";
    echo "window.location.replace('login.php');";
    echo "</script>";
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Meeting Form</title>
  </head>
  <body>

    <div class="register-container">
      <h2 class="title">Meeting Form</h2>
      <form action="php/createMeeting.php" method="post" enctype="multipart/form-data">
        <table class="register-table">
            <tr>
                <td><label for="meetingDate">Date</label></td>
                <td>
                <select name="date" id="date">
                    <?php for($i=1; $i<=31; $i++) {?>
                    <option value="<?php echo $i?>">
                    <?php echo $i?>
                    </option>
                    <?php }?>
                </select>

                <select name="month" id="month">
                    <?php for($i=1; $i<=12; $i++) {?>
                    <option value="<?php echo $i?>">
                    <?php echo $i?>
                    </option>
                    <?php }?>
                </select>

                <select name="year" id="year">
                    <?php for($i=1970; $i<=2021; $i++) {?>
                    <option value="<?php echo $i?>">
                    <?php echo $i?>
                    </option>
                    <?php }?>
                </select>
                </td>
            </tr>
            <tr>

          <tr>
            <td><label for="startTime">Time</label></td>
            <td>
                <!-- <select name="time" id="time">
                <option value="time">09:00 A.M. - 11:00 A.M.</option>
                <option value="time">07:00 P.M. - 09:00 P.M.</option>
                <option value="time">11:00 A.M. - 01:00 P.M.</option>
                </select> -->
                <input type="time" name="startTime" id="startTime">
                <input type="time" name="endTime" id="endTime">
            </td>
          </tr>

          <tr>
            <td><label for="venue">Venue</label></td>
            <td>
                <?php
                $meetings = array('Taman Indonesia', 'Auditorium Singapore', 'America Park');
                
                for($i = 0 ; $i < count($meetings) ; $i++){
                ?>
                <input type="radio" name="venue" value="<?php echo $meetings[$i]?>" id="<?php echo $meetings[$i]?>">
                <label for="<?php echo $meetings[$i]?>">
                <?php echo $meetings[$i]?> <br>
                </label>
                <?php }?>
            </td>
          </tr>

          <tr>
            <td><label for="contactPerson">Contact Person</label></td>
            <td><input type="text" name="contactPerson" id="contactPerson"></td>
          </tr>

          <tr>
            <td><label for="contactNumber">Contact Number</label></td>
            <td><input type="text" name="contactNumber" id="contactNumber"></td>
          </tr>
        </table>
        <button type="submit" class="button-submit">Submit</button>
      </form>
    </div>
  </body>
</html>
<?php
include('sqlConnection.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Register</title>
  </head>
  <body>
    <div class="top-container">
      <a href="login.php">LOGIN</a>
      <a href="#" id="defaultPage">REGISTER</a>
    </div>

    <div class="register-container">
      <h2 class="title">Register</h2>
      <form action="php/registerUser.php" method="post" enctype="multipart/form-data" id="register" onsubmit="return formValidation()">
        <table class="register-table">
          <tr>
            <td><label for="username">Username</label></td>
            <td><input type="text" id="username" name="username" /></td>
          </tr>

          <tr>
            <td><label for="fullName">Full Name</label></td>
            <td><input type="text" id="fullName" name="fullName" /></td>
          </tr>

          <tr>
            <td><label for="email">Email</label></td>
            <td><input type="email" id="email" name="email" /></td>
          </tr>

          <tr>
            <td><label for="password">Password</label></td>
            <td><input type="password" id="password" name="password" /></td>
          </tr>

          <tr>
            <td><label for="repassword">Retype Password</label></td>
            <td><input type="password" id="repassword" name="repassword" /></td>
          </tr>

          <tr>
            <td><label for="gender">Gender</label></td>
            <td>
              <input type="radio" name="gender" value="male" id="male" />
              <label for="male">Male</label>
              <input type="radio" name="gender" value="female" id="female" />
              <label for="female">Female</label>
            </td>
          </tr>

          <tr>
            <td><label for="nationality">Nationality</label></td>
            <td>
              <select name="nationality" id="nationality">
                <option value="American">American</option>
                <option value="Indonesian">Indonesian</option>
                <option value="Singaporean">Singaporean</option>
              </select>
            </td>
          </tr>

          <tr>
            <td><label for="dob">Date of Birth</label></td>
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
            <td><label for="photo">Photo</label></td>
            <td><input type="file" name="photo" id="photo" /></td>
          </tr>
        </table>
        <button type="reset" class="button-submit">Reset</button>
        <button type="submit" class="button-submit">Submit</button>
      </form>
    </div>

    <script src="js/script.js"></script>

  </body>
</html>

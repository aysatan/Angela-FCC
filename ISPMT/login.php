<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="top-container">
      <a href="#" id="defaultPage">LOGIN</a>
      <a href="register.php">REGISTER</a>
    </div>

    <div class="container">
      <div class="text-container">
        <p>HELLO PEOPLE</p>
        <label>Welcome to </label>
        <br />
        <label><span>Angela </span>Fans Club!</label>
        <p>Please fill the login form</p>
      </div>

      <div class="form-container">
        <form action="php/loginUser.php" method="post" id="login" onsubmit="return formValidation()">
          <div>
            <label for="username">Username</label>
            <input type="username" name="username" id="username" />
          </div>
          <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />
          </div>
          <button type="submit" class="button-submit">Login</button>
        </form>
      </div>
    </div>

    <img src="storage/img/123.png" alt="picture" id="picture" />
  </body>
</html>

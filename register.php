<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" href="./custom/custom.css">
  </head>
  <body>
    <meta name="viewport"
    content="=width=device-width,
    initial-scale=1.0">
    <form class="Forms" method="POST" action="process.php">
      <div class="register-display">RGISTER FOR AN ACCOUNT</div>
      <div class="container">
      <label>First Name</label>
      <input type="text" placeholder="Enter your first name" name="firstName" required>
      <label>Last Name</label>
      <input type="text" placeholder="Enter your last name" name="lastName" required>
      <label>Email</label>
      <input type="text" placeholder="Enter email" name="email" required>
      <label>City</label>
          <select name="Position" id = "Position">
          <option value="volvo"><======== Select your City ========></option>
          <?php
            include "process.php";
          ?>
        </select>
      <label class="labels">Password</label>
      <input type="password" placeholder="Input Password" id="password-1" name="password" required>
      <button type="submit" id="register-1">Register</button>
      <div class="line"></div>
      <div class="alreadyHave_Account">Already have an account?</div>
      <div>
      <a class="link"href="login">Login</a>
    </div>
    </div>
  </form>
  </body>
</html>

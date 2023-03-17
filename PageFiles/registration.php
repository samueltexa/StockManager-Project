<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" href="../custom/custom.css">
    <!-- <script src="../custom/custom.js" defer></script> -->
  </head>
  <body>
    <meta name="viewport"
    content="=width=device-width,
    initial-scale=1.0">
    <form class="Forms" method="POST" action="processRegistrationForm.php">
      <div class="register-display">RGISTER FOR AN ACCOUNT</div>
      <div>
        <label for="username">User Name:</label>
        <input type="text" placeholder="Enter  user name" name="username" required>
      </div>
      <div>
        <label for="email">Email:</label>
        <input type="email" placeholder="Enter your email" name="email" required>
      </div>
      <div>
      <label for="District">District:</label>
          <select name="District" id = "District">
          <option value="District"><====== Select your District ======></option>
          <?php
             require "../php_action/processlocations.php";
          ?>
        </select>
      </div>
      <div>
        <label for="password" class="labels">Password:</label>
        <input type="password" placeholder="Enter Password" id="password-1" name="password">
      </div>
      <div>
        <label for="confirmation_password" class="labels">Confirm Password:</label>
        <input type="password" placeholder="Confirm Password" id="password-1" name="confirmation_password">
      </div>
      <button type="submit" id="register-1">Register</button>
      <div class="alreadyHave_Account">Already have an account?</div>
      <div>
        <a class="link"href="login">Login</a>
      </div>
  </form>
  </body>
</html>

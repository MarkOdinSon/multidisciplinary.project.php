<?php
    // app/views/login.php

    echo 'This is login page';

    session_start();
?>

<form action="/users/doLogin" method="post">
  <label for="email">Email:</label>
  <input type="email" name="email" required>
  <br>
  <label for="password">Password:</label>
  <input type="password" name="password" required>
  <br>
  <input type="submit" value="Login">

  <p>
      <?php
          echo $_SESSION['login_wrong_password_error']; // show error message
          unset($_SESSION['login_wrong_password_error']); // delete error message in order to show only one time

          echo $_SESSION['login_wrong_email_error']; // show error message
          unset($_SESSION['login_wrong_email_error']); // delete error message
      ?>
  </p>
</form>

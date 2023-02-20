<?php

// app/views/login.php

echo 'This is login page';
?>

<form action="/users/doLogin" method="post">
  <label for="email">Email:</label>
  <input type="email" id="username" name="username" required>
  <br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>
  <br>
  <input type="submit" value="Login">
</form>

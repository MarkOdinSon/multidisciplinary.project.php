<?php

// app/views/register.php

echo 'This is register page';
?>

<form action="/users/doRegister" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    <br>
    <label for="surname">Surname:</label>
    <input type="text" name="surname" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    <br>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" required>
    <br>
    <input type="submit" value="Register">
</form>

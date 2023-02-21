<?php

session_start();

// app/views/home.php

if (!empty($_SESSION['user']))
{
    echo 'User authorized';
    echo ' <br>';
    print_r($_SESSION['user']);
    echo ' <br>';
    echo '<a href="/users/doLogout">Logout</a>';
    echo ' <br>';
}
else
{
    echo 'You are no authorized';
    echo ' <br>';
}

echo 'This is home page';
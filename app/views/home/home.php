<?php

// app/views/home/home.php

if (!empty($_SESSION['user']))
{
    echo 'User authorized';
    echo ' <br>';
    print_r($_SESSION['user']);
    echo ' <br>';
    echo '<a href="/users/doLogout">Logout</a>';
    echo ' <br>';

    echo $_SESSION['notice_already_logined'];
    unset($_SESSION['notice_already_logined']); // delete error message
    echo ' <br>';
}
else
{
    echo 'You are no authorized';
    echo ' <br>';
}

echo 'This is home page';
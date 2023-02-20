<?php

// app/controllers/UserController.php

require_once('app/models/User.php');

class UserController {
    public function login() {
        require_once('app/views/login.php');
    }

    public function register() {
        require_once('app/views/register.php');
    }

    public function doLogin() {
        // Validate user login

        // $_POST['username'];
    }

    public function doLogout() {

    }

    public function doRegister() {
        // Validate user registration


    }
}

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
    }

    public function doLogout() {

    }

    public function doRegister() {
        $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
        $surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
        $confirm_password = filter_var(trim($_POST['confirm_password']), FILTER_SANITIZE_STRING);

        $params = [
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'password' => $password,
            'confirm_password' => $confirm_password
        ];

        // Validate data before user creating
        if (!empty($errors = User::validates($params))) {
            foreach ($errors as $key => $value) {
                echo "Error " . $key + 1 . ": " . $value . "<br>";
                // Тут можна якимось чином передати повідомлення про невірне заповнення форми та повернути його на users/register
            }
        }
        else
        {
            // Create new user in mySQL DB

            // connect to db and save
        }
    }
}

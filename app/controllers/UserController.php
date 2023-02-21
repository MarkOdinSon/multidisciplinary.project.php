<?php

session_start();

// app/controllers/UserController.php

require_once('app/models/User.php');

class UserController {
    public function login() {
        require_once('app/views/users/login.php');
    }

    public function register() {
        require_once('app/views/users/register.php');
    }

    public function doLogin() {

        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

        $user = User::getUserByEmail($email);

        if ($user == 0)
        {
            // user not found
            $_SESSION['login_wrong_email_error'] = 'User with this email not found!';

            header('Location: login'); // app/views/login.php
        }
        else
        {
            // user found
            if (md5($password.'Kds_25gkks_D') == $user['encrypted_password'])
            {
                // if password is right
                // here session will be crated

                $_SESSION['user'] = [
                    'id' => $user['user_id'],
                    'email' => $user['email'],
                    'name' => $user['name'],
                    'surname' => $user['surname']
                ];

                header('Location: /'); // app/views/home.php

                print_r($user); // authorized successfully
            }
            else
            {
                // wrong password

                $_SESSION['login_wrong_password_error'] = 'Wrong password, try again!';
                header('Location: login'); // app/views/login.php
            }
        }

        // header("Location: /"); // home page
    }

    public function doLogout() {
        if ($_SESSION['user']) {
            unset($_SESSION['user']);
        }
        header('Location: /'); // app/views/home.php
    }

    public function doRegister() {

        $params = UserController::SanitizeValues($_POST);

        // Validate data before user creating
        if (!empty($errors = User::validates($params))) {
            foreach ($errors as $key => $value) {
                echo "Error " . $key + 1 . ": " . $value . "<br>";
                exit();
                // Тут можна якимось чином передати повідомлення про невірне заповнення форми та повернути його на users/register
            }
        }
        else
        {
            // Create new user in mySQL DB

            User::create($params);

            header("Location: /"); // home page
        }
    }

    private static function SanitizeValues($values_array) {
        $name = filter_var(trim($values_array['name']), FILTER_SANITIZE_STRING);
        $surname = filter_var(trim($values_array['surname']), FILTER_SANITIZE_STRING);
        $email = filter_var(trim($values_array['email']), FILTER_SANITIZE_EMAIL);
        $password = filter_var(trim($values_array['password']), FILTER_SANITIZE_STRING);
        $confirm_password = filter_var(trim($values_array['confirm_password']), FILTER_SANITIZE_STRING);

        return $params = [
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'password' => $password,
            'confirm_password' => $confirm_password
        ];
    }
}

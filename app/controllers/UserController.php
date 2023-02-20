<?php

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
            echo 'User with this email not found!';
            exit();
        }
        else
        {
            // user found
            if (md5($password.'Kds_25gkks_D') == $user['encrypted_password'])
            {
                // right password
                // here session will be crated

                // setcookie('user_id', $user['user_id'], time() )

                print_r($user); // authorized successfully
            }
            else
            {
                // wrong password
                echo 'Wrong password, try again!';
            }
        }

        // header("Location: /"); // home page
    }

    public function doLogout() {

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

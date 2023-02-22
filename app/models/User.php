<?php

// app/models/User.php

class User
{
    public static function getUserByEmail($email)
    {
        // Get user from database email

        include 'config/dbConnect.php'; // here variable $dbConnection

        $sql = "SELECT * FROM users WHERE email = ?";

        $queryPDO = $dbConnection->prepare($sql);

        $queryPDO->execute([$email]);

        $user = $queryPDO->fetch(PDO::FETCH_ASSOC);

        $dbConnection = null;

        if ($user) {
            return $user;
        } else {
            return 0;
        }
    }

    public static function validates($data)
    {
        $errors = array();

        if (empty($data['name'])) {
            $errors[] = 'Name cannot be empty';
        }

        if (empty($data['surname'])) {
            $errors[] = 'Name cannot be empty';
        }

        if (User::getUserByEmail(($data['email'])))
        {
            $errors[] = 'Entered email has been already taken!';
        }

        if (empty($data['email'])) {
            $errors[] = 'Email cannot be empty';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email address is not valid';
        }

        if (empty($data['password'])) {
            $errors[] = 'Password cannot be empty';
        } elseif (strlen($data['password']) < 6) {
            $errors[] = 'Password length must be more then 5';
        }

        if (empty($data['confirm_password'])) {
            $errors[] = 'Confirm password cannot be empty';
        } elseif (strlen($data['confirm_password']) < 6) {
            $errors[] = 'Confirm password length must be more then 5';
        }

        if (!($data['confirm_password'] == $data['password'])) {
            $errors[] = 'Confirm password and password must match';
        }

        return $errors;
    }

    public static function create($data)
    {
        // Create new user in database

        include 'config/dbConnect.php'; // here variable $dbConnection

        $sql = "INSERT INTO users (name, surname, email, encrypted_password)
                VALUES (:name, :surname, :email, :encrypted_password)";

        $queryPDO = $dbConnection->prepare($sql);

        $queryPDO->bindParam(":name", $data['name']);
        $queryPDO->bindParam(":surname", $data['surname']);
        $queryPDO->bindParam(":email", $data['email']);
        $queryPDO->bindParam(":encrypted_password", md5($data['password'] . 'Kds_25gkks_D'));

        // Execute the statement to insert the new user
        $queryPDO->execute();

        // Disconnect from the database
        $dbConnection = null;
    }

    public static function edit($data)
    {
        // Edit user in database
    }

    public static function delete($id)
    {
        // Delete user from database
    }
}
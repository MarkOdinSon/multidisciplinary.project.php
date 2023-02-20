<?php

// app/models/User.php

class User {

    public static function validates($data) {
        $errors = array();

        if (empty($data['name'])) {
            $errors[] = 'Name cannot be empty';
        }

        if (empty($data['surname'])) {
            $errors[] = 'Name cannot be empty';
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
            $errors[] = 'Passwords (Confirm password and password) must match';
        }

        return $errors;
    }

    public static function getByEmail($id) {
        // Get user from database user_id
    }

    public static function create($data) {
        // Create new user in database
    }

    public static function edit($data) {
        // Edit user in database
    }

    public static function delete($id) {
        // Delete user from database
    }
}
<?php
$host = "localhost";
$username = "multidisciplinary_user";
$password = "qqwwee11";
$dbname = "multidisciplinary_project_db";

try {
    $dbConnection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
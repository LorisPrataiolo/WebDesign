<?php
include_once 'db.php';

$username = $_POST['username'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

if ($password == $confirmPassword) {
    $password = password_hash($password, PASSWORD_DEFAULT);
    insertUser($username, $name, $surname, $email, $password);
} else {
    echo "Error";
}

?>
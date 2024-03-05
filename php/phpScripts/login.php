<?php
include_once 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$user = getUser($email);

if ($user == null) {
    echo "User not found";
    exit();
}

if (password_verify($password, $user['password'])) {
    echo "User logged in";
    //session_start();
} else {
    echo "Wrong credentials";
}

?>
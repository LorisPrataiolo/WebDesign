<?php
session_start();
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
    $_SESSION['email'] = $email;
    header("Location: ../../index.php");
    exit();
} else {
    $_SESSION['error'] = "Invalid email or password";
    header("Location: ../loginForm.php");
    exit();
}

?>
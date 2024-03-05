<?php
$user = getUser($email);

if ($user == null) {
    echo "User not found";
    exit();
}

$to = $user['email'];
$subject = "Password recovery";
$message = "Recover your password by clicking <a href='http://localhost/php/phpScripts/recoverPass.php?email=" . $user['email'] . "'>here</a>";
$headers = "From: webDesignAdmin@localhost";

mail($to, $subject, $message, $headers);

echo "Email sent";
exit();
?>
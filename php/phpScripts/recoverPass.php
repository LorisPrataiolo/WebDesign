<?php
if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $newPassword = "123456";
    $password = password_hash($newPassword, PASSWORD_DEFAULT);
    updateUserPassword($email, $password);
    echo "Password updated";
} else {
    echo "Email not found";
}
exit();
?>
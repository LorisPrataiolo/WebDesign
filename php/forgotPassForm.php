<?php
    session_start();

    $isSessionSet = isset($_SESSION["email"]);

    if($isSessionSet) {
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/genericStyle.css">

    <title>Forgot Password Page</title>
</head>
<body>

    <nav>
        <a href="../index.php" id="navButton">Homepage</a>
        <a href="./registrationForm.php" id="navButton" >Registration</a>
        <a href="./loginForm.php" id="navButton">Login</a>
    </nav>

    <h1>Forgot Password</h1>

    <form action="../php/phpScripts/forgotPass.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Send">
    </form>
</body>
</html>
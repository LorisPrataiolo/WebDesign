<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>

    <nav>
        <a href="../index.php" id="navButton">Homepage</a>
        <a href="./registrationForm.php" id="navButton" >Registration</a>
        <a href="./loginForm.php" id="navButton">Login</a>
    </nav>


    <form id="form" action="login.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email">
        
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">
        
        <input type="submit" value="Login">
    </form>

</body>
</html>
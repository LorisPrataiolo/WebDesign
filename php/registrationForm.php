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
    
    <title>Registration Page</title>
</head>
<body>
    <nav>
        <a href="../index.php" id="navButton">Homepage</a>
        <a href="./registrationForm.php" id="navButton">Registration</a>
        <a href="./loginForm.php" id="navButton">Login</a>
    </nav>


    <main>
        <fieldset class="formField">
            <legend>Registration</legend>

            <form action="./phpScripts/registration.php" method="post">
                
                <div id="">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username">
                </div>

                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Name">
                </div>

                <div>
                    <label for="surname">Surname</label>
                    <input type="text" name="surname" placeholder="Surname">
                </div> 

                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email">
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password">
                </div>

                <div>
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" name="confirmPassword" placeholder="Confirm Password">
                </div>

                <input type="submit" value="Register">
            </form> 

            <a href="./loginForm.php">Already registered?</a>

        </fieldset>
    </main>
</body>
</html>
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
    
    <title>Login Page</title>
</head>


<body>

    <nav>
        <a href="../index.php" id="navButton">Homepage</a>
        <a href="./registrationForm.php" id="navButton" >Registration</a>
        <a href="./loginForm.php" id="navButton">Login</a>
    </nav>

    <main>
        <?php
            if(isset($_SESSION["error"])){
                echo "<p>" . $_SESSION["error"] . "</p>";
                unset($_SESSION["error"]);
            }
        ?>

        <fieldset class="formField">
            <legend>Login</legend>
            <form id="form" action="./phpScripts/login.php" method="post">
                
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email">
                </div>
                
                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password">
                </div>

                <input type="submit" value="Login">
            </form>

            <a href="./forgotPassForm.php">Forgot your password?</a>
        </fieldset>
    </main>

</body>
</html>
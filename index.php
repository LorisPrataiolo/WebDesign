<?php
    session_start();

    $isSessionSet = isset($_SESSION["email"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/genericStyle.css">
    
    <title>Autenticazione</title>
</head>
<body>

    <nav>
        <a href="./index.php" id="navButton">Homepage</a>
        <?php
            if($isSessionSet) {
                echo "<i>Welcome" . $_SESSION["email"] . "</i>";
                echo "<a href='./php/phpScripts/logout.php' id='navButton'>Logout</a>";
            }
            else {
                echo "<a href='./php/registrationForm.php' id='navButton'>Registration</a>";
                echo "<a href='./php/loginForm.php' id='navButton'>Login</a>";
            }
        ?>

    </nav>
    
    <header>
        <h1>Nome del sito</h1>
    </header>
    
    <main>
        <section>
            <h2> Presentazione del sito </h2>
            <p> Descrizione del sito </p>
            <p> Sito in costruzione </p>
        </section>
    <main>

</body>
</html>
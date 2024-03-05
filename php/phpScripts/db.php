<?php

function connection() {
    $servername = "localhost";
    $dbusername = "webDesignAdmin";
    $dbpassword = "admin";
    $dbname = "webDesign";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function closeConnection($conn) {
    $conn->close();
}

function insertUser($username, $name, $surname, $email, $password) {
    $conn = connection();

    $sql = "INSERT INTO users (username, name, surname, email, password) VALUES ('$username', '$name', '$surname', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    closeConnection($conn);
}
?>
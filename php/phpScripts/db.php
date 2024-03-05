<?php
session_start();

function connection() {
    $servername = "localhost";
    $dbusername = "webDesignAdmin";
    $dbpassword = "admin";
    $dbname = "webDesignDB";

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

    $stmt = $conn->prepare("INSERT INTO users (username, name, surname, email, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $username, $name, $surname, $email, $password);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "User inserted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    closeConnection($conn);
}

function getUser($email) {
    $conn = connection();

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
    } else {
        return null;
    }

    closeConnection($conn);
}

?>
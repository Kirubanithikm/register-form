<?php
session_start();

// Database connection
include "config/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($database_connection, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION['user_name'] = $row["name"];
            header("Location: welcome.php");
            exit;
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($database_connection);
    }
}

mysqli_close($database_connection);

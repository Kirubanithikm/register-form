<?php
session_start();

// Database connection
include "config/config.php";

if ($_POST["password"] !== $_POST["conform_password"]) {
    header("Location: register-form.php");
    exit;
}

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = validate($_POST["user_name"]);
    $email = validate(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));
    $phone_number = validate(preg_replace("/[^0-9]/", "", $_POST["phone_number"]));
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, phone_number, password) VALUES (?, ?, ?, ?)";
    $database_statement = $database_connection->prepare($sql);
    $database_statement->bind_param("ssss", $user_name, $email, $phone_number, $password);
    $status = $database_statement->execute();

    if ($status) {
        $_SESSION['user_name'] = $user_name;
        header("Location: welcome.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($database_connection);
    }
}

$database_statement->close();
$database_connection->close();

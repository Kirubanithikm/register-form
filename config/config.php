<?php
// Database connection
$db_host = "localhost";
$db_user = "wordpress";
$db_password = "wordpress";
$db_name = "form";


$database_connection = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($database_connection->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}
